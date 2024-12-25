<?php
// Router script for handling requests
$requestUri = $_SERVER["REQUEST_URI"];
$filePath = __DIR__ . $requestUri;

// Handle directory requests
if (is_dir($filePath)) {
    // Add trailing slash if missing
    if (substr($requestUri, -1) !== "/") {
        header("Location: " . $requestUri . "/");
        exit;
    }
    
    // Look for index files
    $indexFiles = ["index.php", "index.html", "index.htm"];
    foreach ($indexFiles as $indexFile) {
        if (file_exists($filePath . $indexFile)) {
            $filePath .= $indexFile;
            break;
        }
    }
}

// Serve existing files directly
if (is_file($filePath)) {
    // Determine content type
    $extension = pathinfo($filePath, PATHINFO_EXTENSION);
    switch ($extension) {
        case "php":
            return false; // Let PHP handle this
        case "html":
        case "htm":
            header("Content-Type: text/html; charset=UTF-8");
            break;
        case "css":
            header("Content-Type: text/css");
            break;
        case "js":
            header("Content-Type: application/javascript");
            break;
        case "json":
            header("Content-Type: application/json");
            break;
        default:
            header("Content-Type: " . mime_content_type($filePath));
    }
    readfile($filePath);
    exit;
}

// If no file found, return 404
if (!file_exists($filePath)) {
    header("HTTP/1.1 404 Not Found");
    echo "404 - File not found";
    exit;
}

return false; // Let PHP handle the request
?>
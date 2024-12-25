<?php
// Configuration
$host = 'localhost';
$port = 8000;
$rootDir = __DIR__;  // Current directory as root
$router = 'router.php';

// Command to start the server
$command = sprintf('php -S %s:%d -t %s %s', $host, $port, $rootDir, $router);

// Display server information
echo "Starting PHP Development Server...\n";
echo "Server: http://$host:$port\n";
echo "Document Root: $rootDir\n";
echo "Press Ctrl+C to quit.\n\n";

echo $command . PHP_EOL;
// Execute the command
passthru($command);

// Clean up router file on exit
register_shutdown_function(function() use ($router) {
    if (file_exists($router)) {
        unlink($router);
    }
});
?>
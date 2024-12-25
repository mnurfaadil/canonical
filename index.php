<?php

require_once 'vendor/autoload.php';

use \Mnurfaadil\Canonical\Sequence;
use \Mnurfaadil\Canonical\ObjectArrow;

echo 'INDEX_START' . PHP_EOL;
$class = new Sequence();

echo PHP_EOL . 'INDEX_PRINT' . PHP_EOL;
$class->printLine();
// unset($class);
echo PHP_EOL . 'INDEX_END' . PHP_EOL;

$classClass = new ObjectArrow();

$classClass->printLine()->printLine();
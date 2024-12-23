<?php
namespace Mnurfaadil\Canonical;

class Sequence {

    public function __construct()
    {
        echo PHP_EOL;
        echo "CALL CONSTRUCT" . PHP_EOL;
    }
    
    public function __destruct()
    {
        echo  PHP_EOL . "CALL DESTRUCT";
        echo PHP_EOL;
    }

    public function printLine()
    {
        echo "PRINTLINE";
        return "PRINTLINE";
    }

}
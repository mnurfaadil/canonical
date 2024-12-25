<?php
namespace Mnurfaadil\Canonical;

class ObjectRecursion {

    /**
     * HAK AKSES, attribute ataupun method
     * 
     * public
     * protected
     * private
     */

    // attribute
    protected int $counter = 0;
    
    // method
    public function printLine(): self
    {
        echo "PRINTLINE CLASS " . $this->counter++ . PHP_EOL;
        return $this;
    }

}
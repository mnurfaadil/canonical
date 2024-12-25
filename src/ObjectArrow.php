<?php
namespace Mnurfaadil\Canonical;

class ObjectArrow {

    protected int $counter = 0;

    public function printLine(): self
    {
        echo "PRINTLINE CLASS " . $this->counter++ . PHP_EOL;
        return $this;
    }

}
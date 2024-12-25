<?php
namespace Mnurfaadil\Tests;

use Mnurfaadil\Canonical\Sequence;
use PHPUnit\Framework\TestCase;

class SequenceTest extends TestCase
{
    /**
     * @group unit
     */
    public function testSequencePrintLine()
    {
        $sequence = new Sequence();
        $this->assertEquals("PRINTLINE", $sequence->printLine());
    }
}
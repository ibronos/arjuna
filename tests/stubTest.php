<?php

use PHPUnit\Framework\TestCase;

require '../core/inc/bigtree/utils.php';

class DataTest extends TestCase
{
    public function testStub()
    {
        // Create a stub for the SomeClass class.
        $stub = $this->createMock(BigTree::class);

        // Configure the stub.
        $stub->method('arrayToXML')
             ->willReturn('$tab<$key>$val</$key>\n');

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $array = array("Volvo", "BMW", "Toyota");
        $this->assertEquals("", $stub->arrayToXML($array, $tab = ""));
    }
}
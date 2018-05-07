<?php

use PHPUnit\Framework\TestCase;
use \App\Classes\Bus;

class BusTest extends TestCase
{
    public function testOK()
    {
        $bus1 = new Bus();
        $bus2 = new Bus();

        $this->assertEquals($bus1, $bus2);
    }
    
    public function testNotOK()
    {
        $bus1 = new Bus();
        $bus2 = 'invalid';

        $this->assertNotEquals($bus1, $bus2);
    }
    
    public function testNotEmpty()
    {
        $bus = new Bus();
        $this->assertNotEmpty($bus->getName());
    }
}

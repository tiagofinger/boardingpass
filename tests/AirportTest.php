<?php

use PHPUnit\Framework\TestCase;
use \App\Classes\Airport;

class AirportTest extends TestCase
{
    public function testOK()
    {
        $airport1 = new Airport();
        $airport2 = new Airport();

        $this->assertEquals($airport1, $airport2);
    }
    
    public function testNotOK()
    {
        $airport1 = new Airport();
        $airport2 = new Airport('My airport');

        $this->assertNotEquals($airport1, $airport2);
    }
}

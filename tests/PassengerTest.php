<?php

use PHPUnit\Framework\TestCase;
use App\Classes\Passenger;

class PassengerTest extends TestCase
{
    public function testOK()
    {
        $passenger1 = new Passenger('Tiago');
        $passenger2 = new Passenger('Tiago');

        $this->assertEquals($passenger1, $passenger2);
    }
    
    public function testNotOK()
    {
        $passenger1 = new Passenger('Tiago');
        $passenger2 = new Passenger('João');

        $this->assertNotEquals($passenger1, $passenger2);
    }
    
    public function testEmptyName()
    {
        $passenger = new Passenger();
        $this->assertEmpty($passenger->getName());
    }
    
    public function testNotEmptyName()
    {
        $passenger = new Passenger('Carlos');
        $this->assertNotEmpty($passenger->getName());
    }
    
    public function testEmptyId()
    {
        $passenger = new Passenger();
        $this->assertEmpty($passenger->getId());
    }
    
    public function testNotEmptyId()
    {
        $passenger = new Passenger('Carlos', 12345678);
        $this->assertNotEmpty($passenger->getId());
    }
}

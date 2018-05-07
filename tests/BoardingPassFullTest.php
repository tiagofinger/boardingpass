<?php

use PHPUnit\Framework\TestCase;
use App\Classes\BoardingPassFull;
use App\Classes\Airport;
use App\Classes\Bus;
use App\Classes\City;

class BoardingPassFullTest extends TestCase
{
    public function testEmptyAirport()
    {
        $boardingPassFull = new BoardingPassFull();
        $this->assertEmpty($boardingPassFull->getAirport());
    }
    
    public function testEmptyNumber()
    {
        $boardingPassFull = new BoardingPassFull();
        $this->assertEmpty($boardingPassFull->getNumber());
    }
    
    public function testEmptySeat()
    {
        $boardingPassFull = new BoardingPassFull();
        $this->assertEmpty($boardingPassFull->getSeat());
    }
    
    public function testEmptyGate()
    {
        $boardingPassFull = new BoardingPassFull();
        $this->assertEmpty($boardingPassFull->getGate());
    }
    
    public function testNotEmptyAirport()
    {
        $boardingPassFull = new BoardingPassFull();
        $boardingPassFull->setAirport(new Airport('teste'));
        $this->assertNotEmpty($boardingPassFull->getAirport());
    }
    
    public function testNotEmptyNumber()
    {
        $boardingPassFull = new BoardingPassFull();
        $boardingPassFull->setNumber(123);
        $this->assertNotEmpty($boardingPassFull->getNumber());
    }
    
    public function testNotEmptySeat()
    {
        $boardingPassFull = new BoardingPassFull();
        $boardingPassFull->setSeat('1B');
        $this->assertNotEmpty($boardingPassFull->getSeat());
    }
    
    public function testNotEmptyGate()
    {
        $boardingPassFull = new BoardingPassFull();
        $boardingPassFull->setGate(12);
        $this->assertNotEmpty($boardingPassFull->getGate());
    }

    public function testEqualNoData()
    {
        $boardingPass = new BoardingPassFull();
        $this->assertEquals($boardingPass->__toString(), '<p><b>Origin:</b> </p><p><b>Destination:</b> </p>'
                . '<p><b>Passenger:</b> </p><p><b>Transport:</b> </p>'
                . '<p><b>Airport:</b> </p><p><b>Transport Number:</b> </p>'
                . '<p><b>Date:</b> </p><p><b>Time:</b> </p>'
                . '<p><b>Gate:</b> </p><p><b>Seat:</b> </p><hr />');
    }

    public function testEqualWithData()
    {
        $boardingPass = new BoardingPassFull(new City('Roma'), new City('London'), '01/01/2019', '08:00', new Bus());
        $this->assertEquals($boardingPass->__toString(), '<p><b>Origin:</b> Roma</p>'
                . '<p><b>Destination:</b> London</p><p><b>Passenger:</b> </p>'
                . '<p><b>Transport:</b> Bus</p><p><b>Airport:</b> </p>'
                . '<p><b>Transport Number:</b> </p><p><b>Date:</b> 01/01/2019</p>'
                . '<p><b>Time:</b> 08:00</p><p><b>Gate:</b> </p><p><b>Seat:</b> </p><hr />');
    }

    public function testHasMethodToString()
    {
        $boardingPass = new BoardingPassFull();
        $this->assertTrue(method_exists($boardingPass, '__toString'));
    }
}

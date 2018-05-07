<?php

use PHPUnit\Framework\TestCase;
use App\Classes\BoardingPassSimple;
use App\Classes\Driver;
use App\Classes\City;

class BoardingPassSimpleTest extends TestCase
{
    public function testEmptyDriver()
    {
        $boardingPassSimple = new BoardingPassSimple();
        $this->assertEmpty($boardingPassSimple->getDriver());
    }

    public function testNotEmptyDriver()
    {
        $boardingPassSimple = new BoardingPassSimple();
        $boardingPassSimple->setDriver(new Driver('Tiago Finger'));
        $this->assertNotEmpty($boardingPassSimple->getDriver());
    }

    public function testEqualNoData()
    {
        $boardingPass = new BoardingPassSimple();
        $this->assertEquals($boardingPass->__toString(), '<p><b>Origin:</b> </p><p><b>Destination:</b> </p>'
                . '<p><b>Passenger:</b> </p><p><b>Transport:</b> </p>'
                . '<p><b>Driver:</b> </p><p><b>Date:</b> </p>'
                . '<p><b>Time:</b> </p><hr />');
    }

    public function testEqualWithData()
    {
        $boardingPass = new BoardingPassSimple(new City('Roma'), new City('London'));
        $this->assertEquals($boardingPass->__toString(), '<p><b>Origin:</b> Roma</p>'
                . '<p><b>Destination:</b> London</p>'
                . '<p><b>Passenger:</b> </p><p><b>Transport:</b> </p>'
                . '<p><b>Driver:</b> </p><p><b>Date:</b> </p>'
                . '<p><b>Time:</b> </p><hr />');
    }

    public function testHasMethodToString()
    {
        $boardingPass = new BoardingPassSimple();
        $this->assertTrue(method_exists($boardingPass, '__toString'));
    }
}

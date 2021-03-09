<?php

use PHPUnit\Framework\TestCase;
use \App\Classes\TripPlanner;
use \App\Classes\City;
use App\Classes\BoardingPassSimple;

class TripPlannerTest extends TestCase
{
    public function testEmpty()
    {
        $tripPlanner = new TripPlanner();
        $this->assertEmpty($tripPlanner->getAll());
    }

    public function testNotEmpty()
    {
        $boardingPass = new BoardingPassSimple(new City('Roma'), new City('London'));
        $tripPlanner = new TripPlanner();
        $tripPlanner->add($boardingPass);

        $this->assertNotEmpty($tripPlanner->getAll());
    }
    
    public function testEqualNoData()
    {
        $tripPlanner = new TripPlanner();
        $this->assertEquals($tripPlanner, '<h1>My travel route will be:</h1><hr />');
    }
    
    public function testEqualWithData()
    {
        $boardingPass = new BoardingPassSimple(new City('Roma'), new City('London'));
        $tripPlanner = new TripPlanner();
        $tripPlanner->add($boardingPass);

        $this->assertEquals($tripPlanner->__toString(), '<h1>My travel route will be:</h1><hr />'
                . '<p><b>Origin:</b> Roma</p>'
                . '<p><b>Destination:</b> London</p>'
                . '<p><b>Passenger:</b> </p>'
                . '<p><b>Transport:</b> </p><p><b>Driver:</b> </p>'
                . '<p><b>Date:</b> </p><p><b>Time:</b> </p><hr />');
    }
    
    public function testHasMethodGetAll()
    {
        $tripPlanner = new TripPlanner();
        $this->assertTrue(method_exists($tripPlanner, 'getAll'));
    }

    public function testHasMethodAdd()
    {
        $tripPlanner = new TripPlanner();
        $this->assertTrue(method_exists($tripPlanner, 'add'));
    }

    public function testHasMethodOrganize()
    {
        $tripPlanner = new TripPlanner();
        $this->assertTrue(method_exists($tripPlanner, 'organize'));
    }

    public function testHasMethodToString()
    {
        $tripPlanner = new TripPlanner();
        $this->assertTrue(method_exists($tripPlanner, '__toString'));
    }
    
    public function testHasMethodCmp()
    {
        $tripPlanner = new TripPlanner();
        $this->assertTrue(method_exists($tripPlanner, 'cmp'));
    }
}

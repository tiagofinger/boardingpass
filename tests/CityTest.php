<?php

use PHPUnit\Framework\TestCase;
use \App\Classes\City;

class CityTest extends TestCase
{
    public function testOK()
    {
        $city1 = new City('Roma');
        $city2 = new City('Roma');

        $this->assertEquals($city1, $city2);
    }
    
    public function testNotOK()
    {
        $city1 = new City('London');
        $city2 = new City('Zurich');

        $this->assertNotEquals($city1, $city2);
    }
    
    public function testEmpty()
    {
        $city = new City();
        $this->assertEmpty($city->getName());
    }
    
    public function testNotEmpty()
    {
        $city = new City('São Paulo');
        $this->assertNotEmpty($city->getName());
    }
}

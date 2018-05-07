<?php

use PHPUnit\Framework\TestCase;
use App\Classes\LatitudeLongitude;

class LatitudeLongitudeTest extends TestCase
{
    public function testEmptyLatitude()
    {
        $latitudeLongitude = new LatitudeLongitude();
        $this->assertEmpty($latitudeLongitude->getLatitude());
    }
    
    public function testEmptyLongitude()
    {
        $latitudeLongitude = new LatitudeLongitude();
        $this->assertEmpty($latitudeLongitude->getLongitude());
    }

    public function testNotEmptyLatitude()
    {
        $latitudeLongitude = new LatitudeLongitude();
        $latitudeLongitude->setLatitude(1111111);
        $this->assertNotEmpty($latitudeLongitude->getLatitude());
    }
    
    public function testNotEmptyLongitude()
    {
        $latitudeLongitude = new LatitudeLongitude();
        $latitudeLongitude->setLongitude(1111111);
        $this->assertNotEmpty($latitudeLongitude->getLongitude());
    }
    
    public function testCalculateDistance()
    {
        $latitudeLongitude1 = new LatitudeLongitude(-30.056035, -51.178931);
        $latitudeLongitude2 = new LatitudeLongitude(-29.382999, -50.867158);
        $this->assertEquals(80.62, $latitudeLongitude1->calculateDistance($latitudeLongitude1, $latitudeLongitude2));
    }
    
    public function testHasMethodCalculateDistance()
    {
        $latitudeLongitude = new LatitudeLongitude();
        $this->assertTrue(method_exists($latitudeLongitude, 'calculateDistance'));
    }
}

<?php

use PHPUnit\Framework\TestCase;
use \App\Classes\Car;

class CarTest extends TestCase
{
    public function testOK()
    {
        $car1 = new Car();
        $car2 = new Car();

        $this->assertEquals($car1, $car2);
    }
    
    public function testNotOK()
    {
        $car1 = new Car();
        $car2 = 'invalid';

        $this->assertNotEquals($car1, $car2);
    }
    
    public function testNotEmpty()
    {
        $car = new Car();
        $this->assertNotEmpty($car->getName());
    }
}

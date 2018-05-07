<?php

use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_ExpectationFailedException;

class BoardingPassTest extends TestCase
{
    public function testEmptyOrigin()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\BoardingPass');
        $this->assertEmpty($stub->getOrigin());
    }

    public function testEmptyDestination()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\BoardingPass');
        $this->assertEmpty($stub->getDestination());
    }

    public function testEmptyDate()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\BoardingPass');
        $this->assertEmpty($stub->getDate());
    }

    public function testEmptyTransport()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\BoardingPass');
        $this->assertEmpty($stub->getTransport());
    }

    public function testEmptyPassenger()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\BoardingPass');
        $this->assertEmpty($stub->getPassenger());
    }

    public function testEmptyTime()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\BoardingPass');
        $this->assertEmpty($stub->getTime());
    }

    public function testNotEmptyOrigin()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\BoardingPass');
        $stub->setOrigin(new \App\Classes\City('Roma'));
        $this->assertNotEmpty($stub->getOrigin());
    }

    public function testNotEmptyDestination()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\BoardingPass');
        $stub->setDestination(new \App\Classes\City('Roma'));
        $this->assertNotEmpty($stub->getDestination());
    }

    public function testNotEmptyDate()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\BoardingPass');
        $stub->setDate('01/01/2010');
        $this->assertNotEmpty($stub->getDate());
    }

    public function testNotEmptyTransport()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\BoardingPass');
        $stub->setTransport(new \App\Classes\Bus());
        $this->assertNotEmpty($stub->getTransport());
    }

    public function testNotEmptyPassenger()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\BoardingPass');
        $stub->setPassenger(new \App\Classes\Passenger('Tiago'));
        $this->assertNotEmpty($stub->getPassenger());
    }

    public function testNotEmptyTime()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\BoardingPass');
        $stub->setTime('08:00');
        $this->assertNotEmpty($stub->getTime());
    }

    public function testHasMethodToString()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\BoardingPass');
        $this->assertTrue(method_exists($stub, '__toString'));
    }
}

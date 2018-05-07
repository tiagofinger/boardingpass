<?php

use PHPUnit\Framework\TestCase;
use \App\Classes\Airplane;

class AirplaneTest extends TestCase
{
    public function testOK()
    {
        $airplane1 = new Airplane();
        $airplane2 = new Airplane();

        $this->assertEquals($airplane1, $airplane2);
    }
    
    public function testNotOK()
    {
        $airplane1 = new Airplane();
        $airplane2 = 'invalid';

        $this->assertNotEquals($airplane1, $airplane2);
    }
    
    public function testNotEmpty()
    {
        $airplane = new Airplane();
        $this->assertNotEmpty($airplane->getName());
    }
}

<?php

use PHPUnit\Framework\TestCase;

class TransportTest extends TestCase
{
    public function testEmpty()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\Transport');
        $this->assertEmpty($stub->getName());
    }
    
    public function testHasMethodGetName()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\Transport');
        $this->assertTrue(method_exists($stub, 'getName'));
    }
    
    public function testHasNotMethodSetName()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\Transport');
        $this->assertTrue(method_exists($stub, 'setName'));
    }
    
    public function testHasMethodToString()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\Transport');
        $this->assertTrue(method_exists($stub, '__toString'));
    }
}

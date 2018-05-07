<?php

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testEmpty()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\Person');
        $this->assertEmpty($stub->getName());
    }
    
    public function testNotEmpty()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\Person', ['joao']);
        $this->assertNotEmpty($stub->getName());
    }
    
    public function testHasMethodGetName()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\Person', ['joao']);
        $this->assertTrue(method_exists($stub, 'getName'));
    }
    
    public function testHasMethodSetName()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\Person', ['joao']);
        $this->assertTrue(method_exists($stub, 'setName'));
    }
    
    public function testHasMethodToString()
    {
        $stub = $this->getMockForAbstractClass('\App\Classes\Person', ['joao']);
        $this->assertTrue(method_exists($stub, '__toString'));
    }
}

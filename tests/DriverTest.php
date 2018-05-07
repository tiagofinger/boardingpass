<?php

use PHPUnit\Framework\TestCase;
use \App\Classes\Driver;

class DriverTest extends TestCase
{
    public function testOK()
    {
        $driver1 = new Driver('João Nascimento');
        $driver2 = new Driver('João Nascimento');

        $this->assertEquals($driver1, $driver2);
    }
    
    public function testNotOK()
    {
        $driver1 = new Driver('João Nascimento');
        $driver2 = new Driver('José Nascimento');

        $this->assertNotEquals($driver1, $driver2);
    }
    
    public function testEmptyName()
    {
        $driver = new Driver();
        $this->assertEmpty($driver->getName());
    }
    
    public function testNotEmptyName()
    {
        $driver = new Driver('São Paulo');
        $this->assertNotEmpty($driver->getName());
    }
    
    public function testNotEmptyLicense()
    {
        $driver = new Driver('São Paulo', 111);
        $this->assertNotEmpty($driver->getLicense());
    }
    
    public function testEmptyLicense()
    {
        $driver = new Driver('São Paulo');
        $this->assertEmpty($driver->getLicense());
    }
}

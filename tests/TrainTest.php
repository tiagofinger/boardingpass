<?php

use PHPUnit\Framework\TestCase;
use \App\Classes\Train;

class TrainTest extends TestCase
{
    public function testOK()
    {
        $train1 = new Train();
        $train2 = new Train();

        $this->assertEquals($train1, $train2);
    }
    
    public function testNotOK()
    {
        $train1 = new Train();
        $train2 = 'invalid';

        $this->assertNotEquals($train1, $train2);
    }
    
    public function testNotEmpty()
    {
        $train = new Train();
        $this->assertNotEmpty($train->getName());
    }
}

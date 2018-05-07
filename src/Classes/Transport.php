<?php

namespace App\Classes;

/**
 * Class with the structure of transport
 *
 * @author tiagofinger
 */
abstract class Transport implements \App\Classes\Interfaces\ToString
{
    /**
     *
     * @var string
     */
    protected $name;
    
    /**
     *
     * @param string $name
     */
    public function __construct($name = '')
    {
        $this->name = $name;
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
    
    /**
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
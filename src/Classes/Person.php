<?php

namespace App\Classes;

/**
 * Person
 *
 * @author tiagofinger
 */
abstract class Person implements \App\Classes\Interfaces\ToString
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
     * @param string $value
     */
    public function setName($value)
    {
        $this->name = $value;
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
     *
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }
}
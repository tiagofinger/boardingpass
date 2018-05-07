<?php

namespace App\Classes;

/**
 * Passenger
 *
 * @author tiagofinger
 */
class Passenger extends Person
{
    /**
     *
     * @var string
     */
    private $id;

    /**
     *
     * @param string $name
     * @param string $id
     */
    public function __construct($name = '', $id = '')
    {
        parent::__construct($name);
        $this->id = $id;
    }

    /**
     *
     * @param string $value
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
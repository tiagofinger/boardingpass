<?php

namespace App\Classes;

/**
 * Description of City
 *
 * @author tiagofinger
 */
class City
{
    /**
     *
     * @var string
     */
    private $name;

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
     * Set name
     * @param int $value
     */
    public function setName($value)
    {
        $this->name = $value;
    }

    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
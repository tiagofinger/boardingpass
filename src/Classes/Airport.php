<?php

namespace App\Classes;

/**
 * Airport transport
 *
 * @author tiagofinger
 */
class Airport implements \App\Classes\Interfaces\ToString
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
    function __construct($name = '')
    {
        $this->name = $name;
    }

    /**
     * Set name
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
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
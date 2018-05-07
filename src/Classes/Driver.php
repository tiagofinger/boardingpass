<?php

namespace App\Classes;

/**
 * Driver
 *
 * @author tiagofinger
 */
class Driver extends Person
{
    /**
     *
     * @var string
     */
    private $license;

    /**
     *
     * @param string $name
     * @param string $license
     */
    public function __construct($name = '', $license = '')
    {
        parent::__construct($name);
        $this->license = $license;
    }

    /**
     *
     * @param string $value
     */
    public function setLicense($value)
    {
        $this->license = $value;
    }

    /**
     *
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }
}
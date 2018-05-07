<?php

namespace App\Classes;

/**
 * Class with basic data of boarding pass simple
 *
 * @author tiagofinger
 */
class BoardingPassSimple extends BoardingPass
{
    /**
     *
     * @var \App\Classes\Driver
     */
    private $driver;

    /**
     *
     * @param \App\Classes\App\Classes\Driver $driver
     */
    public function __construct(\App\Classes\City $origin = null, \App\Classes\City $destination = null, $date = null, $time = null, \App\Classes\Transport $transport = null, \App\Classes\Passenger $passenger = null, \App\Classes\Driver $driver = null)
    {
        parent::__construct($origin, $destination, $date, $time, $transport, $passenger);
        $this->driver = $driver;
    }

    /**
     * Set driver
     * @param \App\Classes\Driver $driver
     */
    public function setDriver(Driver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Get driver
     * @return \App\Classes\Driver
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Show the data
     * @return string
     */
    public function __toString()
    {
        $return  = "<p><b>Origin:</b> {$this->getOrigin()}</p>";
        $return .= "<p><b>Destination:</b> {$this->getDestination()}</p>";
        $return .= "<p><b>Passenger:</b> {$this->getPassenger()}</p>";
        $return .= "<p><b>Transport:</b> {$this->getTransport()}</p>";
        $return .= "<p><b>Driver:</b> {$this->getDriver()}</p>";
        $return .= "<p><b>Date:</b> {$this->getDate()}</p>";
        $return .= "<p><b>Time:</b> {$this->getTime()}</p>";
        $return .= '<hr />';
        return $return;
    }
    
    /**
     * Get all data
     * @return []
     */
    public function getData() 
    {
        $attr = get_object_vars($this);
        $data = [];
        foreach ($attr as $i => $value) {
            if (is_object($value)) {
                $data[$i] = $value->__toString();
            } else {
                $data[$i] = $value;
            }
        }
        return $data;
    }
}
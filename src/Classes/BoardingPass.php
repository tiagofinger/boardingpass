<?php

namespace App\Classes;

/**
 * Class with basic data of boarding pass
 *
 * @author tiagofinger
 */
abstract class BoardingPass implements \App\Classes\Interfaces\ToString
{
    /**
     *
     * @var \App\Classes\City
     */
    protected $origin;

    /**
     *
     * @var \App\Classes\City
     */
    protected $destination;

    /**
     *
     * @var string
     */
    protected $time;

    /**
     *
     * @var string
     */
    protected $date;

    /**
     *
     * @var \App\Classes\Transport
     */
    protected $transport;

    /**
     *
     * @var \App\Classes\Passenger
     */
    protected $passenger;

    /**
     *
     * @param \App\Classes\City $origin
     * @param \App\Classes\City $destination
     * @param string $date
     * @param string $time
     * @param \App\Classes\Transport $transport
     * @param \App\Classes\Passenger $passenger
     */
    public function __construct(\App\Classes\City $origin = null, \App\Classes\City $destination = null, $date = null, $time = null, \App\Classes\Transport $transport = null, \App\Classes\Passenger $passenger = null)
    {
        $this->origin = $origin;
        $this->destination = $destination;
        $this->date = $date;
        $this->time = $time;
        $this->transport = $transport;
        $this->passenger = $passenger;
    }
    /**
     * Set origin
     * @param \App\Classes\City $obj
     */
    public function setOrigin(\App\Classes\City $obj)
    {
        $this->origin = $obj;
    }

    /**
     * Set destination
     * @param \App\Classes\City $obj
     */
    public function setDestination(\App\Classes\City $obj)
    {
        $this->destination = $obj;
    }

    /**
     * Set date
     * @param date $value
     */
    public function setDate($value)
    {
        $this->date = $value;
    }

    /**
     * Set time
     * @param string $value
     */
    public function setTime($value)
    {
        $this->time = $value;
    }

    /**
     * Set transport
     * @param \App\Classes\Transport $obj
     */
    public function setTransport(\App\Classes\Transport $obj)
    {
        $this->transport = $obj;
    }

    /**
     * Set Passenger
     * @param \App\Classes\Passenger $obj
     */
    public function setPassenger(\App\Classes\Passenger $obj)
    {
        $this->passenger = $obj;
    }

    /**
     * Get origin
     * @return City
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Get destination
     * @return City
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Get time
     * @return City
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Get date
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get gate
     * @return string
     */
    public function getGate()
    {
        return $this->gate;
    }

    /**
     * Get transport
     * @return Transport
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Get passenger
     * @return Passenger
     */
    public function getPassenger()
    {
        return $this->passenger;
    }

    /**
     * Needs implements this method
     */
    abstract public function __toString();

    abstract public function getData();
}
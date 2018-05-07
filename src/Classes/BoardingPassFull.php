<?php

namespace App\Classes;

/**
 * Class with basic data of boarding pass full
 *
 * @author tiagofinger
 */
class BoardingPassFull extends BoardingPass implements \App\Classes\Interfaces\ToString
{
    /**
     *
     * @var \App\Classes\Airport
     */
    private $airport;

    /**
     *
     * @var string
     */
    private $number;

    /**
     *
     * @var string
     */
    private $seat;

    /**
     *
     * @var string
     */
    private $gate;

    /**
     *
     * @param \App\Classes\City $origin
     * @param \App\Classes\City $destination
     * @param string $date
     * @param string $time
     * @param \App\Classes\Transport $transport
     * @param \App\Classes\Passenger $passenger
     * @param \App\Classes\Airport $airport
     * @param string $number
     * @param string $seat
     * @param string $gate
     */
    public function __construct(\App\Classes\City $origin = null, \App\Classes\City $destination = null, $date = null, $time = null, \App\Classes\Transport $transport = null, \App\Classes\Passenger $passenger = null, \App\Classes\Airport $airport = null, $number = null, $seat = null, $gate = null)
    {
        parent::__construct($origin, $destination, $date, $time, $transport, $passenger);
        $this->airport = $airport;
        $this->number = $number;
        $this->seat = $seat;
        $this->gate = $gate;
    }

    /**
     * Set airport
     * @param \App\Classes\Airport $airport
     */
    public function setAirport(\App\Classes\Airport $airport)
    {
        $this->airport = $airport;
    }

    /**
     * Set number
     * @param string $value
     */
    public function setNumber($value)
    {
        $this->number = $value;
    }

    /**
     * Set seat
     * @param string $value
     */
    public function setSeat($value)
    {
        $this->seat = $value;
    }


    /**
     * Set gate
     * @param string $value
     */
    public function setGate($value)
    {
        $this->gate = $value;
    }

    /**
     * Get airport
     * @return \App\Classes\Airport
     */
    public function getAirport()
    {
        return $this->airport;
    }

    /**
     * @Get number
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Get seat
     * @return string
     */
    public function getSeat()
    {
        return $this->seat;
    }

    /**
     * Get seat
     * @return string
     */
    public function getGate()
    {
        return $this->gate;
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
        $return .= "<p><b>Airport:</b> {$this->getAirport()}</p>";
        $return .= "<p><b>Transport Number:</b> {$this->getNumber()}</p>";
        $return .= "<p><b>Date:</b> {$this->getDate()}</p>";
        $return .= "<p><b>Time:</b> {$this->getTime()}</p>";
        $return .= "<p><b>Gate:</b> {$this->getGate()}</p>";
        $return .= "<p><b>Seat:</b> {$this->getSeat()}</p>";
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
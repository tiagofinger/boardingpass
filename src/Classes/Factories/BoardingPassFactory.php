<?php

namespace App\Classes\Factories;

/**
 * Boarding factory
 *
 * @author tiagofinger
 */
class BoardingPassFactory
{
    /**
     * Create boarding pass
     * @param string $type
     * @param \App\Classes\City $origin
     * @param \App\Classes\City $destination
     * @param type $date
     * @param type $time
     * @param \App\Classes\Transport $transport
     * @param \App\Classes\Passenger $passenger
     * @param \App\Classes\Driver $driver
     * @param \App\Classes\Airport $airport
     * @param type $number
     * @param type $seat
     * @param type $gate
     * @return \App\Classes\BoardingPassSimple|\App\Classes\BoardingPassFull
     */
    public static function create($type = 'S', \App\Classes\City $origin = null, \App\Classes\City $destination = null, $date = null, $time = null, \App\Classes\Transport $transport = null, \App\Classes\Passenger $passenger = null, \App\Classes\Driver $driver = null, \App\Classes\Airport $airport = null, $number = null, $seat = null, $gate = null)
    {
        switch (strtoupper($type)) {
            case 'F':
                return new \App\Classes\BoardingPassFull($origin, $destination, $date, $time, $transport, $passenger, $airport, $number, $seat, $gate);
            break;
            case 'S':
            default:
                return new \App\Classes\BoardingPassSimple($origin, $destination, $date, $time, $transport, $passenger, $driver);
            break;
        }
    }
}
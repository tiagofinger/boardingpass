<?php

namespace App\Classes;

/**
 * Latitude and longitude
 *
 * @author tiagofinger
 */
class LatitudeLongitude {
    private $latitude;
    private $longitude;

    /**
     *
     * @param string $latitude
     * @param string $longitude
     */
    function __construct($latitude = '', $longitude = '')
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     *
     * @param LatitudeLongitude $point1
     * @param LatitudeLongitude $point2
     * @param string $unit
     * @param int $decimals
     * @return int
     */
    static function calculateDistance(LatitudeLongitude $point1, LatitudeLongitude $point2, $unit = 'km', $decimals = 2)
    {
        // Calculate the distance in degrees
        $degrees = rad2deg(acos((sin(deg2rad($point1->getLatitude())) * sin(deg2rad($point2->getLatitude()))) + (cos(deg2rad($point1->getLatitude())) * cos(deg2rad($point2->getLatitude())) * cos(deg2rad($point1->getLongitude() - $point2->getLongitude())))));

        // Convert the distance in degrees to the chosen unit (kilometres, miles or nautical miles)
        switch ($unit) {
            case 'km':
                $distance = $degrees * 111.13384; // 1 degree = 111.13384 km, based on the average diameter of the Earth (12,735 km)
                break;
            case 'mi':
                $distance = $degrees * 69.05482; // 1 degree = 69.05482 miles, based on the average diameter of the Earth (7,913.1 miles)
                break;
            case 'nmi':
                $distance = $degrees * 59.97662; // 1 degree = 59.97662 nautic miles, based on the average diameter of the Earth (6,876.3 nautical miles)
        }
        return round($distance, $decimals);
    }

}

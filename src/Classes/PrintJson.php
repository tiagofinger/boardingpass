<?php

namespace App\Classes;

/**
 * Class to organize the trip
 *
 * @author tiagofinger
 */
class PrintJson implements \App\Classes\Interfaces\Printer
{
    /**
     * Get all boarding passes JSON
     * @param Array arrData
     * @return JSON
     */
    public function print(array $arrData)
    {
        return json_encode($arrData, JSON_FORCE_OBJECT);
    }
}

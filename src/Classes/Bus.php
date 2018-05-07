<?php

namespace App\Classes;

/**
 * Bus transport
 *
 * @author tiagofinger
 */
class Bus extends Transport
{
    function __construct()
    {
        parent::__construct('Bus');
    }
}
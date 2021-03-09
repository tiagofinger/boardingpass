<?php

namespace App\Classes;

/**
 * Class to organize the trip
 *
 * @author tiagofinger
 */
class TripPlanner implements \App\Classes\Interfaces\ToString
{
    /**
     *
     * @var \App\Classes\BoardingPass[]
     */
    private $boardingPasses = [];

    /**
     * Add boarding pass
     * @param \App\Classes\BoardingPass $obj
     */
    public function add(BoardingPass $obj) {
        $this->boardingPasses[] = $obj;
    }

    /**
     * Order the boarding passes
     * @param City $a
     * @param City $b
     * @return int
     */
    private function cmp($a, $b)
    {
        if (mb_strtolower($a->getDestination()) == mb_strtolower($b->getOrigin())) {
            return 0;
        }
        return (mb_strtolower($a->getDestination()) < mb_strtolower($b->getOrigin())) ? -1 : 1;
    }

    /**
     * Organize the trip
     * @return void
     */
    public function organize()
    {
        usort($this->boardingPasses, "App\Classes\TripPlanner::cmp");
    }

    /**
     * Show the boarding passes
     * @return string
     */
    public function __toString()
    {
        $return = '<h1>My travel route will be:</h1><hr />';
        foreach ($this->boardingPasses as $boardingPass)  {
            $return .= $boardingPass;
        }
        return $return;
    }

    /**
     * Get all boarding passes array
     * @return [
     */
    public function getAll()
    {
        return $this->boardingPasses;
    }
}

<?php

class Solution {

    /**
     * @param Integer[] $distance
     * @param Integer $start
     * @param Integer $destination
     * @return Integer
     */
    function distanceBetweenBusStops($distance, $start, $destination)
    {
        $shun = 0;
        $ni = 0;

        if ($start > $destination)
        {
            $tmp = $start;
            $start = $destination;
            $destination = $tmp;
        }

        $count = count($distance);

        for ($i = 0; $i < $count; ++$i)
        {
            if ($i >= $start && $i < $destination)
            {
                $shun += $distance[$i];
            } else
            {
                $ni += $distance[$i];
            }
        }

        return min($shun, $ni);
    }
}
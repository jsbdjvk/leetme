<?php

class Solution {

    /**
     * @param Integer $area
     * @return Integer[]
     */
    function constructRectangle($area)
    {
        for ($i = intval(ceil(sqrt($area))); $i <=  $area; ++$i)
        {
            if (0 == ($area % $i))
            {
                return [$i, $area / $i];
            }
        }

        return [$area, 1];
    }
}
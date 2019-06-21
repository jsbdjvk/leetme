<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        if (!is_numeric($x))
        {
            return 0;
        }

        $positive = $x > 0 ? true : false;

        $x = abs($x);

        $revX =  intval(strrev($x));

        $min = 0 - pow(2, 31);

        $max = pow(2, 31) - 1;

        if (!$positive)
        {
            $revX = (0 - $revX);
        }

        return ($revX > $max || $revX < $min) ? 0 : $revX;
    }
}
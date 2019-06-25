<?php

class Solution {

    /**
     * @param Integer $x
     * @param Integer $y
     * @return Integer
     */
    function hammingDistance($x, $y)
    {
        $total = 0;

        $a = $x ^ $y;

        while ($a > 0)
        {
            $a % 2 && ++$total;
            $a = intval(floor($a / 2));
        }

        return $total;
    }
}
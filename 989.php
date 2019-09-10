<?php

class Solution {

    /**
     * @param Integer[] $A
     * @param Integer $K
     * @return Integer[]
     */
    function addToArrayForm($A, $K)
    {
        $jinwei = 0;
        $i = 0;

        $A = array_reverse($A);

        while ($K || $jinwei)
        {
            $A[$i] += $K % 10 + $jinwei;

            $jinwei = intval(floor($A[$i] / 10));
            $A[$i] %= 10;

            $K = intval(floor($K / 10));

            ++$i;
        }

        return array_reverse($A);
    }
}
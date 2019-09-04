<?php

class Solution {

    /**
     * @param Integer[] $A
     * @return Boolean
     */
    function isMonotonic($A)
    {
        $base = current($A);

        $up = current($A) <= end($A) ? 1 : -1;

        foreach ($A as $a)
        {
            if (($a < $base && $up >0) || ($a > $base && $up < 0))
            {
                return false;
            }
            $base = $a;
        }

        return true;
    }
}
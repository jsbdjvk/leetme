<?php

class Solution {

    /**
     * @param Integer[] $A
     * @return Integer
     * 0 1 2 3 5 4 1
     */
    function peakIndexInMountainArray($A)
    {
        $i = 0;
        $j = count($A) - 1;

        while ($i <= $j)
        {
            $mid = intval(floor(($i + $j) / 2));
            if ($A[$mid] > $A[$mid - 1] && $A[$mid] > $A[$mid + 1]) return $mid;

            if ($A[$mid] < $A[$mid + 1])
            {
                $i = $mid + 1;
            } else {
                $j = $mid - 1;
            }
        }

        return null;
    }
}
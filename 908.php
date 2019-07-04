<?php

class Solution {

    /**
     * @param Integer[] $A
     * @param Integer $K
     * @return Integer
     *
     * 这题其实就是算A数组中最大值-K和最小值+K的差值，大于0就是这个数，小于0都视为0
     */
    function smallestRangeI($A, $K)
    {
        $max = max($A) - $K;
        $min = min($A) + $K;

        if ($max > $min)
        {
            return $max - $min;
        } else {
            return 0;
        }
    }
}
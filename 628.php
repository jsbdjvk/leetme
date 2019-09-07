<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumProduct($nums)
    {
        sort($nums);

        $count = count($nums);

        $end1 = $nums[$count - 1];
        $end2 = $nums[$count - 2];
        $end3 = $nums[$count - 3];
        $start1 = $nums[0];
        $start2 = $nums[1];

        return max($end1 * $end2 * $end3, $start1 * $start2 * $end1);
    }
}
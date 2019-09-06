<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums)
    {
        rsort($nums);

        $nums = array_values(array_unique($nums));

        return isset($nums[2]) ? $nums[2] : $nums[0];
    }
}
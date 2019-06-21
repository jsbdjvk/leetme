<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums)
    {
        if (empty($nums)) return null;

        $ans = $nums[0];
        foreach ($nums as $val)
        {
            $ans ^= $val;
        }

        return $ans;
    }
}
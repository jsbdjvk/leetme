<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target)
    {
        $cnt = count($nums);
        $start = 0;
        $end = $cnt - 1;
        $mid = -1;

        if ($target <= $nums[0])
        {
            return 0;
        }

        if ($target > $nums[$cnt - 1])
        {
            return $cnt;
        }

        while ($start < $end)
        {
            $mid = intval(floor(($start + $end) / 2));
            if ($mid == $start)
            {
                ++$mid;
                break;
            }
            if ($mid == $end)
            {
                break;
            }
            if ($target == $nums[$mid])
            {
                break;
            } else if ($target > $nums[$mid])
            {
                $start = $mid;
            } else
            {
                $end = $mid;
            }
        }
        return $mid;
    }
}
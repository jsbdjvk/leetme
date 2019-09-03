<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target)
    {
        $i = 0;
        $j = count($nums) - 1;

        while ($i <= $j)
        {
            $mid = intval(floor(($i + $j) / 2));

            if ($nums[$mid] == $target)
            {
                return $mid;
            } else if ($nums[$mid] < $target)
            {
                $i = $mid + 1;
            } else
            {
                $j = $mid - 1;
            }
        }

        return -1;
    }
}
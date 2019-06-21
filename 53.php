<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     * [-2,1,-3,4,-1,2,1,-5,4]
     */
    function maxSubArray($nums)
    {
        $count = count($nums);
        $max = max($nums[0], $nums[$count - 1]);

        $lmax = $rmax = 0;

        for ($i = 0, $j = $count - 1; $i <= $j; ++$i, --$j)
        {
            $lmax = $lmax > 0 ? $lmax + $nums[$i] : $nums[$i];
            $max = max($max, $lmax);

            if ($i != $j)
            {
                $rmax = $rmax > 0 ? $rmax + $nums[$j] : $nums[$j];
                $max = max($max, $rmax);
            }
        }

        return max($max, $lmax + $rmax);
    }
}
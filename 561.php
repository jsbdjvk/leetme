<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     *
     * 这道题其实就是分组后，组内两个数相差最小（相邻），那就排序喽
     */
    function arrayPairSum($nums)
    {
        sort($nums);

        $count = count($nums);
        $sum = 0;

        for ($i = 0; $i < $count; $i += 2)
        {
            $sum += $nums[$i];
        }

        return $sum;
    }
}

<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return String[]
     */
    function findRelativeRanks($nums)
    {
        $sortNums = $nums;
        rsort($sortNums);
        $sortNums = array_flip($sortNums);

        $medal = ['Gold Medal', 'Silver Medal', 'Bronze Medal'];

        foreach ($nums as $key => $num)
        {
            $rank = $sortNums[$num];

            $nums[$key] = isset($medal[$rank]) ? $medal[$rank] : strval($rank + 1);
        }

        return $nums;
    }
}
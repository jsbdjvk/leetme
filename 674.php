<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findLengthOfLCIS($nums)
    {
        $count = count($nums);

        $max = 0;

        for ($i = 0; $i < $count;)
        {
            $len = 1;
            for ($j = $i + 1; $j < $count; ++$j)
            {
                if ($nums[$j] > $nums[$j - 1])
                {
                    $len++;
                } else
                {
                    break;
                }
            }

            $max = max($max, $len);

            $i = $j;
        }

        return $max;
    }
}
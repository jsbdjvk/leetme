<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findShortestSubArray($nums)
    {
        $map = [];

        foreach ($nums as $key => $num)
        {
            if (!isset($map[$num]))
            {
                $map[$num] = [1, $key, 1];
                continue;
            }

            $map[$num][0]++;
            $map[$num][2] = $key - $map[$num][1] + 1;
        }

        $minLen = 0;
        $maxDu = 0;

        foreach ($map as $val)
        {
            if ($val[0] > $maxDu)
            {
                $maxDu = $val[0];
                $minLen = $val[2];
            } else if ($val[0] == $maxDu)
            {
                if ($val[2] < $minLen)
                {
                    $minLen = $val[2];
                }
            }
        }

        return $minLen;
    }
}
<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {

        $count = count($nums);
        for ($i = 0; $i < $count;)
        {
            if (-1 == $nums[$i] || ($nums[$i] == $i))
            {
                ++$i;
                continue;
            }

            if (!isset($nums[$nums[$i]]))
            {
                $nums[$nums[$i]] = -1;
            }

            $tmp = $nums[$i];
            $nums[$i] = $nums[$nums[$i]];
            $nums[$tmp] = $tmp;
        }

        $res = $count; // 默认缺省n

        for ($i = 0; $i < $count; ++$i)
        {
            if (-1 == $nums[$i])
            {
                $res = $i;
                break;
            }
        }

        return $res;
    }
}
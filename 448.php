<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums)
    {
        $count = count($nums);
        for ($i = 0; $i < $count;)
        {
            if (-1 == $nums[$i] || ($nums[$i] - 1 == $i))
            {
                ++$i;
                continue;
            }

            if ($nums[$nums[$i] - 1] == $nums[$i])
            {
                $nums[$i] = -1;
                ++$i;
                continue;
            }

            $tmp = $nums[$i];
            $nums[$i] = $nums[$nums[$i] - 1];
            $nums[$tmp - 1] = $tmp;
        }

        $res = [];

        for ($i = 0; $i < $count; ++$i)
        {
            if (-1 == $nums[$i])
            {
                $res[] = $i + 1;
            }
        }

        return $res;
    }
}
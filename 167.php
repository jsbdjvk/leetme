<?php

class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target)
    {
        $arr = [];
        foreach ($numbers as $val)
        {
            $arr[] = $target - $val;
        }

        $arr = array_intersect($numbers, $arr);

        while(1)
        {

            $first = key($arr);

            $second = array_flip($arr)[$target - $arr[$first]];

            if ($first != $second)
            {
                break;
            }
            $val = next($arr);
            if (empty($val)) break;
        }

        return [$first+1, $second+1];
    }
}
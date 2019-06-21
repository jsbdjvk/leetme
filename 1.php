<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        if (!is_array($nums) || empty($nums) || !is_numeric($target))
        {
            return [0, 0];
        }

        $res = asort($nums, SORT_NUMERIC);

        if (!$res)
        {
            return [0, 0];
        }

        foreach ($nums as $key => $val)
        {
            foreach ($nums as $keyNext => $valNext)
            {
                if ($key == $keyNext) continue;

                if (($val + $valNext) == $target) return $key < $keyNext ? [$key, $keyNext] : [$keyNext, $key];
            }
        }

        return [0, 0];
    }
}

$obj = new Solution();
print_r($obj->twoSum([2, 7, 11, 15], 9));
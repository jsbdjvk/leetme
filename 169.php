<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums)
    {
        sort($nums);

        return $nums[intval(floor(count($nums) / 2))];
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElementEx($nums)
    {
        $arr = array_count_values($nums);

        $n = count($nums) / 2;

        foreach ($arr as $key => $val)
        {
            if ($val >= $n) return $key;
        }

        return null;
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElementEx2($nums)
    {
        $n = count($nums) / 2;

        $arr = [];

        foreach ($nums as $key => $val)
        {
            if (!isset($arr[$val])) {
                $arr[$val] = 1;
            } else
            {
                ++$arr[$val];
            }
            if ($arr[$val] > $n) return $val;
        }

        return null;
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     *
     * 摩尔投票算法
     */
    function majorityElementEx3($nums)
    {
        $cnt = 0;
        $num = 0;

        foreach ($nums as $key => $val)
        {
            0 == $cnt && $num = $val;

            $num == $val ? ++$cnt : --$cnt;
        }

        return $num;
    }
}
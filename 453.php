<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     *
     * 取巧，题意n-1个人+1，那也就是说一个人-1，减到最小那个人呗
     */
    function minMoves($nums)
    {
        sort($nums);

        $jichu = current($nums);

        $jishu = 0;

        foreach ($nums as $num)
        {
            $jishu += $num - $jichu;
        }

        return $jishu;
    }
}
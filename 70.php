<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     * 1 1
     * 2 2
     * 3 3
     * 4 5
     * 5 8
     * f(n) = f(n-1) + f(n-2) 斐波那契数列
     */
    function climbStairs($n)
    {
        if (1 == $n) return 1;

        $fn_1 = $fn_2 = 1;

        for ($i = 1; $i < $n; ++$i)
        {
            $fn = $fn_1 + $fn_2;
            $fn_2 = $fn_1;
            $fn_1 = $fn;
        }

        return $fn;
    }
}
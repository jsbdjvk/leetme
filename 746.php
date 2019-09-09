<?php

class Solution {

    /**
     * @param Integer[] $cost
     * @return Integer
     *
     * 动态规划（DP）
     * 状态转移方程：f(n) = min(f(n-1), f(n-2)) + cost[n];
     */
    function minCostClimbingStairs($cost)
    {
        $a = $cost[0];
        $b = $cost[1];

        $count = count($cost);

        for ($i = 2; $i < $count; ++$i)
        {
            $c = min($a, $b) + $cost[$i];

            $a = $b;
            $b = $c;
        }

        return min($a, $b);
    }
}
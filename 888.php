<?php

class Solution {

    /**
     * @param Integer[] $A
     * @param Integer[] $B
     * @return Integer[]
     */
    function fairCandySwap($A, $B)
    {
        $sumA = array_sum($A);
        $sumB = array_sum($B);

        $half = ($sumA + $sumB) / 2;

        foreach ($A as $a)
        {
            $swapB = $half - ($sumA - $a);

            if (in_array($swapB, $B))
            {
                return [$a, $swapB];
            }
        }

        return [];
    }
}
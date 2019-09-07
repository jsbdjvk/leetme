<?php

class Solution {

    /**
     * @param Integer[] $A
     * @param Integer $K
     * @return Integer
     */
    function largestSumAfterKNegations($A, $K)
    {
        sort($A);

        foreach ($A as $k => $v)
        {
            if ($K <= 0)
            {
                break;
            }

            if ($v < 0)
            {
                $A[$k] = 0 - $v;
                --$K;
            } else
            {
                break;
            }
        }

        sort($A);

        if ($K > 0 && ($K % 2) == 1)
        {
            $A[0] = 0 - $A[0];
        }

        return array_sum($A);
    }
}
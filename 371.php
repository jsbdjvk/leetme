<?php

class Solution {

    /**
     * @param Integer $a
     * @param Integer $b
     * @return Integer
     */
    function getSum($a, $b)
    {
        $cf = ($a & $b) << 1; // 进位值
        $a ^= $b;  // 不进位值

        while ($cf)
        {
            $b = $cf;

            $cf = ($a & $b) << 1;
            $a ^= $b;
        }

        return $a;
    }
}
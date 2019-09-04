<?php

class Solution {

    /**
     * @param Integer $m
     * @param Integer $n
     * @param Integer[][] $ops
     * @return Integer
     *
     * 其实就是求重叠面积，短板效应
     */
    function maxCount($m, $n, $ops) {

        if (empty($ops))
        {
            return $m * $n;
        }

        $public = [40001, 40001];

        foreach ($ops as $op)
        {
            if ($op[0] < $public[0]) $public[0] = $op[0];
            if ($op[1] < $public[1]) $public[1] = $op[1];
        }

        return $public[0] * $public[1];
    }
}
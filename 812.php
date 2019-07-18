<?php

class Solution {

    /**
     * @param Integer[][] $points
     * @return Float
     *
     * 凸包问题，算法：扫描法
     */
    function largestTriangleArea($points)
    {

    }

    function twoPointDistance($p, $q)
    {
        return sqrt(pow(($p[0] - $q[0]), 2) + pow(($p[1] - $q[1]), 2));
    }

    function triangleArea($a, $b, $c)
    {
        $p = ($a + $b + $c) / 2;
        return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
    }
}
<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     *
     * 假设要求a的平方根,先假设为x,然后计算 (a/x+x)/2，知道x无限相近结束计算（就看精确到小数后几位）
     */
    function mySqrt($x)
    {
        if (0 == $x) return 0;

        // 这里认为近似值达到小数点后两位一致就算最后结果
        define('FACTOR', 100);

        $lastX = $x / 2 * FACTOR;

        while (1)
        {
            $newX = floor(($x / ($lastX / FACTOR) + ($lastX / FACTOR)) / 2 * FACTOR);

            if (intval($lastX / FACTOR) == intval($newX / FACTOR)) break;

            $lastX = $newX;
        }

        return intval(floor($lastX / FACTOR));
    }
}
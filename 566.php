<?php
class Solution {

    /**
     * @param Integer[][] $nums
     * @param Integer $r
     * @param Integer $c
     * @return Integer[][]
     */
    function matrixReshape($nums, $r, $c)
    {
        $row = count($nums);
        $col = count(current($nums));

        if (($row * $col) != ($r * $c)) return $nums;

        $arr = [];

        for ($i = 0; $i < $r; ++$i)
        {
            for ($j = 0; $j < $c; ++$j)
            {
                $k = $i * $c + $j + 1;
                $k1 = intval(ceil($k / $col) - 1);
                $k2 = (($k - 1) % $col);
                $arr[$i][$j] = $nums[$k1][$k2];
            }
        }

        return $arr;
    }
}
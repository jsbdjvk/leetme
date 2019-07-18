<?php

class Solution {

    /**
     * @param Integer $R
     * @param Integer $C
     * @param Integer $r0
     * @param Integer $c0
     * @return Integer[][]
     */
    function allCellsDistOrder($R, $C, $r0, $c0) {

        $arr = [];

        for ($i = 0; $i < $R; ++$i)
        {
            for ($j = 0; $j < $C; ++$j)
            {
                $arr[$i . '-' . $j] = abs($r0 - $i) + abs($c0 - $j);
            }
        }

        asort($arr);

        foreach ($arr as $ij => $val)
        {
            list($i, $j) = explode('-', $ij);
            $arr[$ij] = [intval($i), intval($j)];
        }

        return array_values($arr);
    }
}
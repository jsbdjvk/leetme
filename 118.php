<?php

class Solution {

    /**
     * @param Integer $numRows
     * @return Integer[][]
     */
    function generate($numRows)
    {
        if (0 == $numRows) return [];

        $arr[] = [1];

        for ($i = 1; $i < $numRows; ++$i)
        {
            for ($j = 0; $j <= $i; ++$j)
            {
                $arr[$i][$j] = ($arr[$i - 1][$j - 1] ?: 0) + ($arr[$i - 1][$j] ?: 0);
            }
        }

        return $arr;
    }

    /**
     * @param Integer $rowIndex
     * @return Integer[]
     */
    function getRow($rowIndex)
    {
        $arr = [1];

        if (0 == $rowIndex) return $arr;

        for ($i = 1; $i <= $rowIndex; ++$i)
        {
            $last = 0; // 留存右上角的值

            $mid = intval(floor($i / 2)); // 每行对称规则只计算一半
            for ($j = 0; $j <= $mid; ++$j)
            {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$i - $j] = ($arr[$j] ?: 0) + $last;
                $last = $tmp;
            }
        }

        return $arr;
    }
}

$obj = new Solution();
var_dump($obj->generate(5));
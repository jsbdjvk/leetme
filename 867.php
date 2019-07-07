<?php

class Solution {

    /**
     * @param Integer[][] $A
     * @return Integer[][]
     */
    function transpose($A)
    {
        $row = count($A);
        $col = count(current($A));

        $arr = [];

        for ($i = 0; $i < $col; ++$i)
        {
            for ($j = 0; $j < $row; ++$j)
            {
                $arr[$i][$j] = $A[$j][$i];
            }
        }

        return $arr;
    }
}

// 1   2   3   1 4
// 4   5   6   2 5
//             3 6
<?php

class Solution {

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortedSquares($A)
    {
        $i = $j = $k = 0;
        $arr = []; // 记录负数
        $cnt = count($A);

        while($A[$i] < 0 && $i < $cnt)
        {
            $arr[] = $A[$i++];
        }

        $arr = array_reverse($arr);
        $cntF = count($arr);

        while($j < $cntF && $i < $cnt)
        {
            $x = pow($A[$i], 2);
            $y = pow($arr[$j], 2);
            if ($x < $y)
            {
                $A[$k] = $x;
                ++$i;
            } else
            {
                $A[$k] = $y;
                ++$j;
            }
            ++$k;
        }

        if ($j < $cntF)
        {
            for (; $j < $cntF; ++$j)
            {
                $A[$k++] = pow($arr[$j], 2);
            }
        }

        if ($i < $cnt)
        {
            for (; $i < $cnt; ++$i)
            {
                $A[$k++] = pow($A[$i], 2);
            }
        }

        return $A;
    }
}
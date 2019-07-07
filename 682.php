<?php

class Solution {

    /**
     * @param String[] $ops
     * @return Integer
     */
    function calPoints($ops)
    {
        $arr = []; // 记录每回合得分，总得分就是所有相加

        foreach ($ops as $val)
        {
            switch ($val)
            {
                case '+':
                    $end = end($arr);
                    $end_2 = prev($arr);
                    array_push($arr, $end + $end_2);
                    break;
                case 'D':
                    array_push($arr, 2 * end($arr));
                    break;
                case 'C':
                    array_pop($arr);
                    break;
                default:
                    array_push($arr, $val);
                    ;
            }
        }

        return array_sum($arr);
    }
}
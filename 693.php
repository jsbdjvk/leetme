<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     *
     * 两种解法：
     * 1、移位判断法
     * 2、等值判断法（如下程序）
     */
    function hasAlternatingBits($n)
    {
        $bit = intval(floor(log($n, 2)) + 1);

        $x = 0;

        for ($i = 1; $i <= $bit; ++$i)
        {
            $x *= 2;

            if (($i % 2) == 1)
            {
                ++$x;
            }
        }

        return ($n == $x) ? true : false;
    }
}

// 1 1
// 2 10
// 3 11
// 4 100
// 5 101
// 6 110
// 7 111
// 8 1000
// 9 1001
//10 1010
//11 1011
//12 1100
//13 1101
//14 1110
//15 1111
//16 10000
//17 10001
//18 10010
//19 10011
//20 10100
//21 10101
//22 10110
//23 10111
//24 11000
//25 11001
//26 11010
//31 11111
//42 101010
//85 1010101

// 1 2 5 10 21 42 85
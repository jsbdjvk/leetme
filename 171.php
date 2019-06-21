<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     *
     * 其实就是求26进制数，A - Z 代表 1 - 26
     */
    function titleToNumber($s)
    {
        $sum = 0;
        $len = strlen($s);

        $s = strrev($s);

        for ($i = 0; $i < $len; ++$i)
        {
            $sum += intval(ord($s[$i]) - 64) * pow(26, $i);
        }

        return $sum;
    }

    /**
     * @param Integer $n
     * @return String
     */
    function convertToTitle($n)
    {
        $s = '';

        while ($n > 0)
        {
            var_dump($n);

            $x = $n % 26;
            0 == $x && $x = 26;

            $s = chr($x + 64) . $s;

            $n = ($n - $x) / 26;
        }

        return $s;
    }
}
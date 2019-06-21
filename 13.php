<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s)
    {
        define('ROMAN_I', 'I');
        define('ROMAN_V', 'V');
        define('ROMAN_X', 'X');
        define('ROMAN_L', 'L');
        define('ROMAN_C', 'C');
        define('ROMAN_D', 'D');
        define('ROMAN_M', 'M');

        $arrRomanMap = [
            ROMAN_I . ROMAN_V => 4,
            ROMAN_I . ROMAN_X => 9,
            ROMAN_X . ROMAN_L => 40,
            ROMAN_X . ROMAN_C => 90,
            ROMAN_C . ROMAN_D => 400,
            ROMAN_C . ROMAN_M => 900,
            ROMAN_I => 1,
            ROMAN_V => 5,
            ROMAN_X => 10,
            ROMAN_L => 50,
            ROMAN_C => 100,
            ROMAN_D => 500,
            ROMAN_M => 1000,
        ];

        if ($arrRomanMap[$s])
        {
            return $arrRomanMap[$s];
        }

        $sum = 0;

        foreach ($arrRomanMap as $key => $val)
        {
            $sum += substr_count($s, $key) * $val;
            $s = str_replace($key, '', $s);
        }

        return $sum;
    }
}
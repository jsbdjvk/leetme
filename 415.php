<?php

class Solution {

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function addStrings($num1, $num2)
    {
        $num1 = strrev($num1);
        $num2 = strrev($num2);

        $len1 = strlen($num1);
        $len2 = strlen($num2);

        $len = $len1 > $len2 ? $len1 : $len2;

        $jinwei = 0;
        $new = '';

        for ($i = 0; $i < $len; ++$i)
        {
            if (!isset($num1[$i]))
            {
                $num1[$i] = 0;
            }

            if (!isset($num2[$i]))
            {
                $num2[$i] = 0;
            }

            $he = intval($num1[$i]) + intval($num2[$i]) + $jinwei;

            $jinwei = intval(floor($he / 10));

            $new[$i] = $he % 10;
        }

        if ($jinwei)
        {
            $new[$i] = $jinwei;
        }

        return strrev($new);
    }
}
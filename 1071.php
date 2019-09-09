<?php

class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     *
     * 这题可以用辗转相除法求解，参数是两个字符串的长度，最后求得的公因子再取字符串0 -> 公因子 长度的字符串就是最后解
     */
    function gcdOfStrings($str1, $str2)
    {
        $len1 = strlen($str1);
        $len2 = strlen($str2);

        $len = $len1 > $len2 ? $len2 : $len1;

        for ($i = $len; $i > 0; --$i)
        {
            if (($len1 % $i) == 0 && ($len2 % $i) == 0)
            {
                $str = substr($str1, 0, $i);
                if (0 == strcmp($str1, str_repeat($str, $len1 / $i)) && 0 == strcmp($str2, str_repeat($str, $len2 / $i)))
                {
                    return $str;
                }
            }
        }

        return '';
    }
}
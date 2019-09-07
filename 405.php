<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function toHex($num)
    {
        $map = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f'];

        if (0 == $num)
        {
            return $map[$num];
        }

        if (0 > $num)
        {
            $num = intval(pow(2, 32) + $num);
        }

        return $this->tenToSixteen($num, $map);
    }

    function tenToSixteen($num, &$map)
    {
        $str = '';

        while ($num > 0)
        {
            $str .= $map[$num % 16];
            $num = intval(floor($num / 16));
        }
        return strrev($str);
    }
}
<?php

class Solution {

    /**
     * @param Integer $num
     * @return String
     */
    function convertToBase7($num)
    {
        return ($num < 0) ? '-' . $this->cTB7($num) : $this->cTB7($num);
    }

    function cTB7($num)
    {
        if (0 == $num)
        {
            return '0';
        }

        $num = abs($num);

        $str = '';

        while ($num > 0)
        {
            $str .= strval($num % 7);
            $num = intval(floor($num / 7));
        }

        return strrev($str);
    }
}
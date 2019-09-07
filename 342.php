<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPowerOfFour($num)
    {
        if ($num <= 0)
        {
            return false;
        }

        $zhishu = intval(floor(log($num, 2)));

        return ((($num & ($num - 1)) == 0) && (($zhishu % 2) == 0)) ? true : false;
    }
}
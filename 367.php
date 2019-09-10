<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isPerfectSquare($num)
    {
        for($i=1; $num > 0; $i += 2)
        {
            $num -= $i;
        }

        return (0 == $num) ? true : false;
    }
}
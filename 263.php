<?php

class Solution {

    /**
     * @param Integer $num
     * @return Boolean
     */
    function isUgly($num)
    {
        if ($num <= 0) return false;

        while ($num != 1)
        {
            if (0 == ($num % 2))
            {
                $num /= 2;
            } else if (0 == ($num % 3))
            {
                $num /= 3;
            } else if (0 == ($num % 5))
            {
                $num /= 5;
            } else
            {
                return false;
            }
        }

        return true;
    }
}
<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function findComplement($num)
    {
        $x = 1;

        while ($num > $x)
        {
            $x = ($x << 1) + 1;
        }

        return $num ^ $x;
    }
}
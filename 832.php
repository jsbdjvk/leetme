<?php

class Solution {

    /**
     * @param Integer[][] $A
     * @return Integer[][]
     */
    function flipAndInvertImage($A)
    {
        foreach ($A as $key => $val)
        {
            $A[$key] = array_reverse($val);
            foreach ($A[$key] as $key1 => $val1)
            {
                $A[$key][$key1] ^= 1;
            }
        }

        return $A;
    }
}
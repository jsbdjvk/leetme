<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isPowerOfThree($n)
    {
        return $n > 0 && (1162261467%$n) == 0;
    }
}
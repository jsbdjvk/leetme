<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function canWinNim($n)
    {
        return $n % 4 ? true : false;
    }
}
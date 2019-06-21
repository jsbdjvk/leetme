<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x)
    {
        if (!is_numeric($x))
        {
            return false;
        }

        $revX =  strrev($x);

        return ($revX == $x) ? true : false;
    }
}
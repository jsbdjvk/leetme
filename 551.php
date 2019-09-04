<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function checkRecord($s)
    {
        if (substr_count($s, 'A') > 1 || substr_count($s, 'LLL') > 0)
        {
            return false;
        }

        return true;
    }
}
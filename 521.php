<?php

class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return Integer
     */
    function findLUSlength($a, $b)
    {
        return ($a == $b) ? -1 : (strlen($a) > strlen($b) ? strlen($a) : strlen($b));
    }
}
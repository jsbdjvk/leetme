<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {
        $arr = explode(' ', $s);
        $arr = array_map('strrev', $arr);
        return implode(' ', $arr);
    }
}
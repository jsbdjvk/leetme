<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s)
    {
        $s = trim($s);

        if (empty($s)) return 0;

        $arr = explode(' ', $s);

        return strlen($arr[count($arr) - 1]);
    }

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWordEx($s)
    {
        $s = trim($s);

        if (empty($s)) return 0;

        $idx = strrpos($s, ' ');

        return strlen(trim(substr($s, $idx)));
    }
}
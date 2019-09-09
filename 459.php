<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function repeatedSubstringPattern($s) {
        $len = strlen($s);

        $half = intval(floor($len / 2));

        for ($i = 1; $i <= $half; ++$i)
        {
            if (($len % $i) == 0 && 0 == strcmp($s, str_repeat(substr($s, 0, $i), $len / $i)))
            {
                return true;
            }
        }

        return false;
    }
}
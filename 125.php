<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s)
    {
        $s = trim($s);

        if (empty($s)) return true;

        $i = 0;
        $j = strlen($s);

        while ($i < $j)
        {
            while (!(('a' <= $s[$i] && $s[$i] <= 'z') || ('A' <= $s[$i] && $s[$i] <= 'Z') || ('0' <= $s[$i] && $s[$i] <= '9')))
            {
                ++$i;
                if ($i >= $j) return true;
            }

            while (!(('a' <= $s[$j] && $s[$j] <= 'z') || ('A' <= $s[$j] && $s[$j] <= 'Z') || ('0' <= $s[$j] && $s[$j] <= '9')))
            {
                --$j;
                if ($i >= $j) return true;
            }

            if (0 != strcasecmp($s[$i], $s[$j])) return false;

            ++$i;
            --$j;
        }

        return true;
    }
}

$obj = new Solution();
var_dump($obj->isPalindrome('aba'));
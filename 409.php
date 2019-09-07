<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestPalindrome($s)
    {
        $map = [];

        $len = strlen($s);

        for ($i = 0; $i < $len; ++$i)
        {
            $map[$s[$i]]++;
        }

        $maxLen = 0;
        $flag = false;

        foreach ($map as $val)
        {
            if (($val % 2) == 0)
            {
                $maxLen += $val;
            } else
            {
                $flag = true;
                $maxLen += $val - 1;
            }
        }

        return $flag ? ($maxLen + 1) : $maxLen;
    }
}
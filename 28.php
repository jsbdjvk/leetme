<?php

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle)
    {
        if ('' == trim($needle)) return 0;

        $idx = -1;
        $len = 0;
        $haystackLen = strlen($haystack);
        $needleLen = strlen($needle);

        for ($i = 0, $j = 0; $i < $haystackLen; ++$i)
        {
            if ($haystack[$i] == $needle[$j])
            {
                ++$j;
                ++$len;
                -1 == $idx && $idx = $i;
                if ($len == $needleLen) break;

                continue;
            }

            ($idx != -1) && ($i = $idx);

            $j = 0;
            $len = 0;
            $idx = -1;
        }

        return ($len == $needleLen) ? $idx : -1;
    }
}
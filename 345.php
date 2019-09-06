<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s)
    {
        $yuanyin = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

        $i = 0;
        $j = strlen($s) - 1;

        while ($i < $j)
        {
            if (!in_array($s[$i], $yuanyin))
            {
                ++$i;
                continue;
            }

            if (!in_array($s[$j], $yuanyin))
            {
                --$j;
                continue;
            }

            $this->swapStr($s, $i, $j);

            ++$i;
            --$j;
        }

        return $s;
    }

    function swapStr(&$s, $i, $j)
    {
        $chr = $s[$i];
        $s[$i] = $s[$j];
        $s[$j] = $chr;
    }
}
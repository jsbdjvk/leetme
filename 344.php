<?php

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s)
    {
        $i = 0;
        $j = count($s) - 1;

        while ($i < $j)
        {
            $tmp = $s[$i];
            $s[$i] = $s[$j];
            $s[$j] = $tmp;

            ++$i;
            --$j;
        }
    }
}
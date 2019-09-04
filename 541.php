<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function reverseStr($s, $k)
    {
        if (1 == $k)
        {
            return $s;
        }

        $len = strlen($s);

        for ($i = 0, $j = $k - 1; $i < $len; $i += 2 * $k,$j += 2 * $k)
        {
            if ($j > ($len - 1))
            {
                $j = $len - 1;
            }

            $this->swapString($s, $i, $j);
        }

        return $s;
    }

    function swapString(&$str, $i, $j)
    {
        while ($i < $j)
        {
            $tmp = $str[$i];
            $str[$i] = $str[$j];
            $str[$j] = $tmp;

            ++$i;
            --$j;
        }
    }
}
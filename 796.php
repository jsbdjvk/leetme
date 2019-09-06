<?php

class Solution {

    /**
     * @param String $A
     * @param String $B
     * @return Boolean
     *
     *
     * 以下是一种解法，还有种解法是判断A+A包含B就可以了
     */
    function rotateString($A, $B)
    {
        $lenA = strlen($A);
        $lenB = strlen($B);

        if ($lenA != $lenB)
        {
            return false;
        }

        if (0 == strcmp($A, $B))
        {
            return true;
        }

        for ($i = 0; $i < ($lenA - 1); ++$i)
        {
            $this->rotateStr($A, $lenA);

            if (0 == strcmp($A, $B))
            {
                return true;
            }
        }

        return false;
    }

    function rotateStr(&$str, $len)
    {
        if (empty($str)) return;

        $chr = $str[0];

        for ($i = 0; $i < ($len - 1); ++$i)
        {
            $str[$i] = $str[$i + 1];
        }

        $str[$len - 1] = $chr;
    }
}
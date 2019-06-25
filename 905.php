<?php

class Solution {

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParity($A)
    {
        $i = 0;
        $j = count($A) - 1;

        while ($i < $j)
        {
            while ($this->isEven($A[$i]))
            {
                ++$i;
                if ($i >= $j) return $A;
            }

            while (!$this->isEven($A[$j]))
            {
                --$j;
                if ($i >= $j) return $A;
            }

            $this->swap($A[$i], $A[$j]);
            ++$i;
            --$j;
        }

        return $A;
    }

    function isEven($x)
    {
        return (($x % 2) == 0);
    }

    function swap(&$x, &$y)
    {
        $tmp = $x;
        $x = $y;
        $y = $tmp;
    }
}
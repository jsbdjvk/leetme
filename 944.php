<?php

class Solution {

    /**
     * @param String[] $A
     * @return Integer
     *
     * 该题其实就是求递减的列的数
     */
    function minDeletionSize($A)
    {
        $col = strlen(current($A));
        $row = count($A);
        $total = 0;

        for ($i = 0; $i < $col; ++$i)
        {
            for ($j = 0; $j < $row - 1; ++$j)
            {
                if ($A[$j][$i] > $A[$j + 1][$i])
                {
                    ++$total;
                    break;
                }
            }
        }

        return $total;
    }
}
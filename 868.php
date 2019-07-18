<?php

class Solution {

    /**
     * @param Integer $N
     * @return Integer
     */
    function binaryGap($N)
    {
        $max = 0;

        $i = 1; // 记录遍历到第几位了
        $last = 0; // 记录上一次1的位置

        while ($N)
        {
            if ($N & 1)
            {
                if (0 != $last)
                {
                    $max = max(($i - $last), $max);
                }
                $last = $i;
            }
            ++$i;
            $N = $N >> 1;
        }

        return $max;
    }
}
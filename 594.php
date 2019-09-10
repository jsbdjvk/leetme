<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findLHS($nums)
    {
        sort($nums);

        $count = count($nums);

        $maxLen = 0;

        for ($i = 0; $i < $count; ++$i)
        {
            $len = 1;
            $flag = false;
            for ($j = $i + 1; $j < $count; ++$j)
            {
                if ($nums[$i] == $nums[$j] || ($nums[$i] + 1) == $nums[$j])
                {
                    $len++;
                    if (($nums[$i] + 1) == $nums[$j])
                    {
                        $flag = true;
                    }
                } else
                {
                    break;
                }
            }

            if ($flag)
            {
                $maxLen = max($maxLen, $len);
            }
        }

        return $maxLen;
    }
}
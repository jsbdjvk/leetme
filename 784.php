<?php

class Solution {

    /**
     * @param String $S
     * @return String[]
     */
    function letterCasePermutation($S)
    {
        $queue = [$S]; // 队列
        $count = 1; // 队列长度
        $i = 0; // 游标

        while($i < $count)
        {
            $current = $queue[$i];

            $len = strlen($current);

            for ($j = 0; $j < $len; ++$j)
            {
                $strNew = $current;
                if ($strNew[$j] >= 'a' && $strNew[$j] <= 'z')
                {
                    $strNew[$j] = chr(ord($strNew[$j]) - 32);
                } else if ($strNew[$j] >= 'A' && $strNew[$j] <= 'Z')
                {
                    $strNew[$j] = chr(ord($strNew[$j]) + 32);
                } else
                {
                    continue;
                }

                !in_array($strNew, $queue) && array_push($queue, $strNew);
            }

            ++$i;
            $count = count($queue);
        }

        return $queue;
    }
}
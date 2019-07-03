<?php

class Solution {

    /**
     * @param Integer[] $A
     * @return Integer
     */
    function repeatedNTimes($A)
    {
        sort($A);

        $count = count($A);

        for ($i = 0; $i < $count - 1; ++$i)
        {
            if ($A[$i] == $A[$i + 1])
            {
                return $A[$i];
            }
        }

        return null;
    }

    function repeatedNTimesEx($A)
    {
        $arr = [];

        foreach ($A as $val)
        {
            ++$arr[$val];
            if ($arr[$val] > 1)
            {
                return $val;
            }
        }

        return null;
    }
}
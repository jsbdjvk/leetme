<?php

class Solution {

    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer[]
     */
    function selfDividingNumbers($left, $right)
    {
        $arr = [];

        $i = $left;

        while ($i < 10)
        {
            $arr[] = $i++;
            continue;
        }

        for (;$i <= $right; ++$i)
        {
            if (strpos(strval($i), '0') !== false)
            {
                continue;
            }

            $flag = true;
            $tmp = $i;
            $arrTmp = []; // 记录已近算过的数，比如121，把1记录下来可以少算一次

            while($tmp > 0)
            {
                $x = $tmp % 10;

                $tmp = intval(floor($tmp / 10));

                if ($arrTmp[$x] || 1 == $x) continue;

                if (($i % $x) != 0)
                {
                    $flag = false;
                    break;
                }
                $arrTmp[$x] = 1;
            }

            if ($flag)
            {
                $arr[] = $i;
            }
        }

        return $arr;
    }
}
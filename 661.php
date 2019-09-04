<?php

class Solution {

    /**
     * @param Integer[][] $M
     * @return Integer[][]
     */
    function imageSmoother($M)
    {
        $res = [];

        foreach ($M as $key => $m)
        {
            foreach ($m as $key1 => $n)
            {
                $res[$key][$key1] = $this->avg($M, $key, $key1);
            }
        }

        return $res;
    }

    function avg(&$M, $i, $j)
    {
        $base = 0;
        $sum = 0;

        if (isset($M[$i - 1][$j - 1]))
        {
            ++$base;
            $sum += $M[$i - 1][$j - 1];
        }

        if (isset($M[$i - 1][$j]))
        {
            ++$base;
            $sum += $M[$i - 1][$j];
        }

        if (isset($M[$i - 1][$j + 1]))
        {
            ++$base;
            $sum += $M[$i - 1][$j + 1];
        }

        if (isset($M[$i][$j - 1]))
        {
            ++$base;
            $sum += $M[$i][$j - 1];
        }

        if (isset($M[$i][$j]))
        {
            ++$base;
            $sum += $M[$i][$j];
        }

        if (isset($M[$i][$j + 1]))
        {
            ++$base;
            $sum += $M[$i][$j + 1];
        }

        if (isset($M[$i + 1][$j - 1]))
        {
            ++$base;
            $sum += $M[$i + 1][$j - 1];
        }

        if (isset($M[$i + 1][$j]))
        {
            ++$base;
            $sum += $M[$i + 1][$j];
        }

        if (isset($M[$i + 1][$j + 1]))
        {
            ++$base;
            $sum += $M[$i + 1][$j + 1];
        }

        return intval(floor($sum / $base));
    }
}
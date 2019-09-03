<?php

class Solution {

    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills)
    {
        define('FIVE', 5);
        define('TEN', 10);
        define('TWENTY', 20);

        $map = [FIVE => 0, TEN => 0, TWENTY => 0]; // 货币计数器

        foreach ($bills as $bill)
        {
            if (FIVE == $bill)
            {
                $map[FIVE]++;
            } else if (TEN == $bill)
            {
                if ($map[FIVE] <= 0)
                {
                    return false;
                }
                $map[FIVE]--;
                $map[TEN]++;
            } else if (TWENTY == $bill)
            {
                if ($map[TEN] <= 0)
                {
                    if ($map[FIVE] < 3)
                    {
                        return false;
                    }
                    $map[FIVE] -= 3;
                } else
                {
                    if ($map[FIVE] <= 0)
                    {
                        return false;
                    }
                    $map[FIVE]--;
                    $map[TEN]--;
                }
                $map[TWENTY]++;
            }
        }

        return true;
    }
}
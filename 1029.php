<?php


class Solution {

    /**
     * @param Integer[][] $costs
     * @return Integer
     *
     *
     * ---代价最小原则---
     * 先按照最小划分，划分出去城市A的和去城市B的
     * 再判断哪个里面多了，再把多的按照代价最小（A、B两个城市花费差值的绝对值最小）划分到另一个城市去
     */
    function twoCitySchedCost($costs)
    {
        $cityA = [];

        $N = count($costs) / 2;

        foreach ($costs as $key => $cost)
        {
            if ($cost[0] < $cost[1])
            {
                $cityA[] = $key;
            }
        }

        $countA = count($cityA);

        if ($countA > $N)
        {
            $duoyu = $countA - $N;

            $arrSort = [];

            foreach ($cityA as $k)
            {
                $arrSort[$k] = abs($costs[$k][0] - $costs[$k][1]);
            }

            asort($arrSort);

            $arrDuoyu = array_slice(array_keys($arrSort), 0, $duoyu);

            $cityA = array_diff($cityA, $arrDuoyu);
        } else if ($countA < $N)
        {
            $shaoyu = $N - $countA;

            $arrSort = [];

            $cityB = array_diff(array_keys($costs), $cityA);

            foreach ($cityB as $k)
            {
                $arrSort[$k] = abs($costs[$k][0] - $costs[$k][1]);
            }

            asort($arrSort);

            $arrShaoyu = array_slice(array_keys($arrSort), 0, $shaoyu);

            $cityA = array_merge($cityA, $arrShaoyu);
        }

        $total = 0;

        foreach ($costs as $key => $cost)
        {
            if (in_array($key, $cityA))
            {
                $total += $cost[0];
            } else
            {
                $total += $cost[1];
            }
        }

        return $total;
    }
}




<?php

class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     *
     * 此题计算模型为：
     * 1. 顶部投影：数组中非0元素个数
     * 2. 侧部投影：所有行最大值之和
     * 3. 前部投影：所有列最大值之和
     */
    function projectionArea($grid)
    {
        return $this->topArea($grid) + $this->sideArea($grid) + $this->frontArea($grid);
    }

    function topArea($grid)
    {
        $count = 0;
        foreach ($grid as $item)
        {
            foreach ($item as $value)
            {
                $value > 0 && $count++;
            }
        }

        return $count;
    }

    function sideArea($grid)
    {
        $count = 0;
        foreach ($grid as $item)
        {
            $count += max($item);
        }

        return $count;
    }

    function frontArea($grid)
    {
        $count = 0;

        $row = count($grid);
        $col = count(current($grid));

        for ($i = 0; $i < $col; ++$i)
        {
            $max = $grid[0][$i];
            for ($j = 1; $j < $row; ++$j)
            {
                $max = max($max, $grid[$j][$i]);
            }
            $count += $max;
        }

        return $count;
    }
}
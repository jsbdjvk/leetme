<?php
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function islandPerimeter($grid)
    {
        $sum = 0;

        foreach ($grid as $ki => $item)
        {
            foreach ($item as $kv => $value)
            {
                if ($value == 1)
                {
                    $sum += $this->calaPerimeter($grid, $ki, $kv);
                }
            }
        }

        return $sum;
    }

    // 计算方块四个方位是否是水，是水计入周长
    function calaPerimeter(&$grid, $i, $j)
    {
        $count = 0;

        if (empty($grid[$i - 1][$j])) $count++;
        if (empty($grid[$i + 1][$j])) $count++;
        if (empty($grid[$i][$j - 1])) $count++;
        if (empty($grid[$i][$j + 1])) $count++;

        return $count;
    }
}
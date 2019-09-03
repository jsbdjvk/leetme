<?php


class Solution {

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     *
     * 贪心
     *
     * 先排序，用最小的饼干满足胃口最小的小朋友
     */
    function findContentChildren($g, $s)
    {
        $countG = count($g);
        $countS = count($s);

        sort($g);
        sort($s);

        $i = 0;
        $j = 0;

        $total = 0;

        for (; $i < $countG; ++$i)
        {
            for (; $j < $countS;)
            {
                if ($g[$i] <= $s[$j])
                {
                    ++$total;
                    ++$j;
                    break;
                }
                ++$j;
            }
        }

        return $total;
    }
}
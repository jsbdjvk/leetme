<?php

class Solution {

    /**
     * @param Integer[] $heights
     * @return Integer
     * 最直观的解法，先排序，再与原数组比较
     */
    function heightChecker($heights)
    {
        $arrOri = $heights;

        sort($heights);

        $total = 0;

        foreach ($arrOri as $key => $val)
        {
            $val != $heights[$key] && ++$total;
        }

        return $total;
    }
}
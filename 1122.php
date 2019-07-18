<?php
class Solution {

    /**
     * @param Integer[] $arr1
     * @param Integer[] $arr2
     * @return Integer[]
     */
    function relativeSortArray($arr1, $arr2)
    {
        $arrDiff = array_diff($arr1, $arr2);
        $arr1 = array_diff($arr1, $arrDiff);

        sort($arrDiff);

        $arr1 = array_count_values($arr1);

        $arr = [];

        foreach ($arr2 as $val)
        {
            $arr = array_merge($arr, array_fill(0, $arr1[$val], $val));
        }

        return array_merge($arr, $arrDiff);
    }
}
<?php

class Solution {

    /**
     * @param String[] $A
     * @return String[]
     */
    function commonChars($A)
    {
        $arr = [];
        foreach ($A as $key => $val)
        {
            $arr[$key] = str_split($val);
        }

        $arr = array_intersect(...$arr);

        $arrMap = [];

        foreach ($arr as $val)
        {
            $arrMap[$val]++;
        }

        $arr = [];

        foreach ($arrMap as $key => $val)
        {
            foreach ($A as $str)
            {
                $arrMap[$key] = min(substr_count($str, $key), $arrMap[$key]);
            }
        }

        foreach ($arrMap as $key => $val)
        {
            $arr = array_merge($arr, array_fill(0, $val, $key));
        }

        return $arr;
    }
}
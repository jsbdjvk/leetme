<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2)
    {
        $map = [];

        foreach ($nums1 as $val)
        {
            $map[$val]++;
        }

        $res = [];

        foreach ($nums2 as $val)
        {
            if ($map[$val]-- > 0)
            {
                $res[] = $val;
            }
        }

        return $res;
    }
}
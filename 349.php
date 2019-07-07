<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersection($nums1, $nums2)
    {
        // 这题有几种解法：
        // 1. 直接用php内置函数array_intersect
        // 2. 哈希表
        // 3. 对两个数组先排序，然后分别设置两个指针i,j，如果所指元素不同，小的往前走一步，相同则同时走一步并记录元素

        if (empty($nums1) || empty($nums2)) return [];

        $set = [];

        $count1 = count($nums1);
        $count2 = count($nums2);

        $i = 0;
        $j = 0;

        sort($nums1);
        sort($nums2);

        while ($i < $count1 && $j < $count2)
        {
            if ($nums1[$i] < $nums2[$j])
            {
                ++$i;
            } else if ($nums1[$i] > $nums2[$j])
            {
                ++$j;
            } else
            {
                !in_array($nums1[$i], $set) && array_push($set, $nums1[$i]);
                ++$i;
                ++$j;
            }
        }

        return $set;
    }
}
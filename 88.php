<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     *
     */
    function merge(&$nums1, $m, $nums2, $n)
    {
        if (empty($nums1) && empty($nums2)) return;

        for ($i = 0; $i < $n; ++$i)
        {
            $nums1[$m + $i] = $nums2[$i];
        }

        $nums1 = array_merge($nums1, $nums2);
        sort($nums1);

        return;
    }

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     *
     */
    function mergeEx(&$nums1, $m, $nums2, $n)
    {
        if (empty($nums1) && empty($nums2)) return;

        $maxLen = $m + $n;

        while ($m >=0 && $n >= 0)
        {
            $nums1[$maxLen - 1] = $nums1[$m - 1] > $nums2[$n - 1] ? $nums1[$m - 1] : $nums2[$n - 1];
            $nums1[$m - 1] > $nums2[$n - 1] ? $m-- : $n--;
        }

        if ($n > 0)
        {
            for ($i = 0; $i < $n; ++$i)
            {
                $nums1[$i] = $nums2[$i];
            }
        }

        return;
    }
}
<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function nextGreaterElement($nums1, $nums2)
    {
        $arr = [];
        $count2 = count($nums2);

        foreach ($nums1 as $val)
        {
            $v = -1;

            $i = array_search($val, $nums2);
            for (++$i; $i < $count2; ++$i)
            {
                if ($val < $nums2[$i])
                {
                    $v = $nums2[$i];
                    break;
                }
            }

            array_push($arr, $v);
        }

        return $arr;
    }
}
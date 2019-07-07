<?php

class Solution {

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParityII($A)
    {
        // 此题有几种解法：
        // 1. 创建新数组记录，遍历A，如果是当前元素是偶数则放在新数组2N的位置，奇数放在2N+1（N >= 0）
        // 2. 创建一个奇数数组，一个偶数数组，一次入队
        // 3. 先把偶数放在数组前半部分，奇数放在数组后半部分，然后将前半部分的奇数下标与后半部分偶数下标交换即可

        $arr = [];
        $i = 0; // 记录偶数下标
        $j = 1; // 记录奇数下标

        foreach ($A as $val)
        {
            if (($val % 2) == 0)
            {
                $arr[$i] = $val;
                $i += 2;
            } else
            {
                $arr[$j] = $val;
                $j += 2;
            }
        }

        ksort($arr);

        return $arr;
    }
}
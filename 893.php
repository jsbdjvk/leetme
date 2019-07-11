<?php

class Solution {

    /**
     * @param String[] $A
     * @return Integer
     *
     * 这个暴利解法，已经超时了，不采取
     * 试一试：把所有奇偶数下标分别排序，再直接对比字符串不就行了，详见后缀Ex的方法
     *
     */
    function numSpecialEquivGroups($A) {

        $len = strlen(current($A));

        $arrSet = [];
        $count = 0;

        foreach ($A as $val)
        {
            if (in_array($val, $arrSet)) continue;

            $arr = [$val];
            $queue = [$val];

            $k = 0;

            while(1)
            {
                $popVal = $queue[$k++];
                if (empty($popVal)) break;

                for ($i = 0; $i < $len; ++$i)
                {
                    for ($j = $i + 2; $j < $len; $j += 2)
                    {
                        $sps = $this->swapij($popVal, $i, $j);
                        !in_array($sps, $queue) && array_push($queue, $sps);
                        in_array($sps, $A) && !in_array($sps, $arr) && array_push($arr, $sps);
                    }
                }

            }

            $arrSet = array_merge($arrSet, $arr);
            ++$count;
        }

        unset($arrSet);
        return $count;
    }

    function swapij($str, $i, $j)
    {
        $c = $str[$i];
        $str[$i] = $str[$j];
        $str[$j] = $c;
        return $str;
    }

    /**
     * @param $A
     * @return int
     *
     * 这种方法可行，对奇偶下标字符排序，直接比较字符串是否相等，相等就是一撮的
     */
    function numSpecialEquivGroupsEx($A) {

        $len = strlen(current($A));

        $set = [];

        foreach ($A as $key => $value)
        {
            $arrEven = $arrOdd = [];

            for ($i = 0; $i < $len; ++$i)
            {
                if ($i % 2 == 0)
                {
                    $arrEven[$i] = $value[$i];
                } else
                {
                    $arrOdd[$i] = $value[$i];
                }
            }

            asort($arrEven);
            asort($arrOdd);

            $arr = array_merge($arrEven, $arrOdd);

            ksort($arr);

            $str = implode('', $arr);

            !in_array($str, $set) && array_push($set, $str);
        }

        return count($set);
    }
}


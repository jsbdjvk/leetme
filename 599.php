<?php

class Solution {

    /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2)
    {
        $list2 = array_flip($list2);

        $min = null;

        $res = [];

        foreach ($list1 as $key => $val)
        {
            if (isset($list2[$val]))
            {
                $indexSum = $key + $list2[$val];

                if (null === $min)
                {
                    $min = $indexSum;
                    $res = [$val];
                } else
                {
                    if ($indexSum < $min)
                    {
                        $res = [$val];
                    } else if ($indexSum == $min)
                    {
                        $res[] = $val;
                    }
                }
            }
        }

        return $res;
    }
}
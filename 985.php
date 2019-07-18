<?php

class Solution {

    /**
     * @param Integer[] $A
     * @param Integer[][] $queries
     * @return Integer[]
     *
     */
    function sumEvenAfterQueries($A, $queries)
    {
        $arr = [];

        $sum = $this->evenSum($A);

        foreach ($queries as $val)
        {
            $plus = $A[$val[1]] + $val[0];

            if ($this->even($plus))
            {
                $sum += $val[0];
                if (!$this->even($A[$val[1]]))
                {
                    $sum += $A[$val[1]];
                }
            } else
            {
                if ($this->even($A[$val[1]]))
                {
                    $sum -= $A[$val[1]];
                }
            }

            $A[$val[1]] = $plus;

            array_push($arr, $sum);
        }

        return $arr;
    }

    function evenSum($arr)
    {
        return array_sum(array_map([__CLASS__, 'even'], $arr));
    }

    function even($x)
    {
        return (($x % 2) == 0) ? $x : 0;
    }
}
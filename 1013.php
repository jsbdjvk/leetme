<?php


class Solution {

    /**
     * @param Integer[] $A
     * @return Boolean
     */
    function canThreePartsEqualSum($A)
    {
        $sum = array_sum($A);

        if (($sum % 3) != 0)
        {
            return false;
        }

        $oneOfThree = $sum / 3;

        $jishu = 0;
        $base = 0;

        foreach ($A as $a)
        {
            $base += $a;

            if ($base == $oneOfThree)
            {
                if (++$jishu >= 2)
                {
                    return true;
                }
                $base = 0;
            }
        }

        return false;
    }
}
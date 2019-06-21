<?php

class Solution {

    /**
     * @param String $J
     * @param String $S
     * @return Integer
     */
    function numJewelsInStones($J, $S)
    {
        $total = 0;
        $arr = [];
        $lenJ = strlen($J);
        $lenS = strlen($S);

        for ($i = 0; $i < $lenJ; ++$i)
        {
            $arr[$J[$i]] = 1;
        }

        for ($i = 0; $i < $lenS; ++$i)
        {
            if (isset($arr[$S[$i]])) ++$total;
        }

        return $total;
    }
}
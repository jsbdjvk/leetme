<?php

class Solution {

    /**
     * @param String $S
     * @return Integer[][]
     */
    function largeGroupPositions($S) {

        $res = [];

        $len = strlen($S);

        $i = 0;

        while ($i < $len)
        {
            $start = $i;
            $chr = $S[$i];

            while ($S[$i] == $chr)
            {
                ++$i;
            }

            if (($i - $start) >= 3)
            {
                $res[] = [$start, $i - 1];
            }
        }

        return $res;
    }
}
<?php

class Solution {

    /**
     * @param Integer[] $widths
     * @param String $S
     * @return Integer[]
     */
    function numberOfLines($widths, $S)
    {
        $sum = 0;
        $line = 0;

        $len = strlen($S);

        for ($i = 0; $i < $len; ++$i)
        {
            $wid = $widths[ord($S[$i]) - 97];
            $sum += $wid;
            if ($sum > 100)
            {
                $line++;
                $sum = $wid;
            }
        }

        return [($sum > 0) ? ($line+1) : $line, $sum];
    }
}
<?php


class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b)
    {
        $a = strrev($a);
        $b = strrev($b);

        $aLen = strlen($a);
        $bLen = strlen($b);

        $maxLen = $aLen < $bLen ? $bLen : $aLen;
        $maxStr = $aLen < $bLen ? $b : $a;

        $up = 0;

        for ($i = 0; $i < $maxLen; ++$i)
        {
            if ($i < $aLen && $i < $bLen)
            {
                $sum = intval($a[$i]) + intval($b[$i]);
            } else
            {
                $sum = intval($maxStr[$i]);
            }

            if ($up)
            {
                $sum += $up;
            }

            $up = ($sum >= 2) ? 1 : 0;
            $surplus = $sum % 2;

            $maxStr[$i] = strval($surplus);
        }

        if ($up)
        {
            $maxStr[$i] = strval($up);
        }

        return strrev($maxStr);
    }
}
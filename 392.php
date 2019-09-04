<?php


class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t)
    {
        if ('' == $s)
        {
            return true;
        }
        $sLen = strlen($s);
        $tLen = strlen($t);

        for ($i = 0, $j = 0; $i < $tLen; $i++)
        {
            if ($s[$j] == $t[$i])
            {
                $j++;

                if ($j > ($sLen - 1))
                {
                    return true;
                }
            }
        }

        return false;
    }
}
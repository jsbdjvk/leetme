<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t)
    {
        $map = [];

        $len = strlen($s);

        for ($i = 0; $i < $len; ++$i)
        {
            if (!isset($map[$s[$i]]))
            {
                if (in_array($t[$i], $map))
                {
                    return false;
                }
                $map[$s[$i]] = $t[$i];
            } else
            {
                if ($map[$s[$i]] != $t[$i])
                {
                    return false;
                }
            }
        }

        return true;
    }
}
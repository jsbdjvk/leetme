<?php
class Solution {

    /**
     * @param Integer[] $bits
     * @return Boolean
     */
    function isOneBitCharacter($bits)
    {
        $count = count($bits);

        if (0 == $bits[$count - 1] && (!isset($bits[$count - 2]) || 0 == $bits[$count - 2]))
        {
            return true;
        }

        $flag = true;

        for ($i = 0; $i < $count; ++$i)
        {
            if (1 == $bits[$i])
            {
                $flag = false;
                ++$i;
            } else
            {
                $flag = true;
            }
        }

        return $flag;
    }
}
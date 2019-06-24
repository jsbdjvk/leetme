<?php

class Solution {

    /**
     * @param String $str
     * @return String
     */
    function toLowerCase($str)
    {
        $len = strlen($str);

        for ($i = 0; $i < $len; ++$i)
        {
            if ($str[$i] >= 'A' && $str[$i] <= 'Z')
            {
                $str[$i] = chr(ord($str[$i]) + 32);
            }
        }

        return $str;
    }
}
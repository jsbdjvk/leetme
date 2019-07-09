<?php

class Solution {

    /**
     * @param String $text
     * @param String $first
     * @param String $second
     * @return String[]
     */
    function findOcurrences($text, $first, $second)
    {
        $arrExplode = explode(' ', $text);

        $count = count($arrExplode);

        $arr = [];

        for ($i = 2; $i < $count; ++$i)
        {
            if (($arrExplode[$i - 2] == $first) && ($arrExplode[$i - 1] == $second)) $arr[] = $arrExplode[$i];
        }

        return $arr;
    }
}
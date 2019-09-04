<?php

class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine)
    {
        $map = [];

        $ranLen = strlen($ransomNote);
        $magLen = strlen($magazine);

        for ($i = 0; $i < $magLen; ++$i)
        {
            $map[$magazine[$i]]++;
        }

        for ($i = 0; $i < $ranLen; ++$i)
        {
            if (!isset($map[$ransomNote[$i]]))
            {
                return false;
            }

            if (--$map[$ransomNote[$i]] < 0)
            {
                return false;
            }
        }

        return true;
    }
}
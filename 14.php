<?php
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $strPrefix = '';

        foreach ($strs as $key => $val)
        {
            if (0 == $key)
            {
                $strPrefix = $val;
                continue;
            }

            $s1len = strlen($strPrefix);
            $s2len = strlen($val);
            $len = $s1len > $s2len ? $s2len : $s1len;

            for ($i = 0; $i < $len; ++$i)
            {
                if (strncasecmp($strPrefix, $val, $i+1))
                {
                    break;
                }
            }

            $strPrefix = substr($strPrefix, 0, $i);
        }

        return $strPrefix;
    }
}
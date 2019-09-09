<?php

class Solution {

    /**
     * @param String[] $words
     * @return String
     */
    function longestWord($words)
    {
        usort($words, [__CLASS__, 'cmp']);

        $count = count($words);

        for ($i = $count - 1; $i >= 0; --$i)
        {
            $len = strlen($words[$i]);

            $flag = true;

            for ($j = 1; $j <= $len; ++$j)
            {
                if (!in_array(substr($words[$i], 0, $j), $words))
                {
                    $flag = false;
                }
            }

            if ($flag)
            {
                return $words[$i];
            }
        }

        return '';
    }

    function cmp($a, $b)
    {
        $lenA = strlen($a);
        $lenB = strlen($b);

        if ($lenA == $lenB)
        {
            return strcmp($b, $a);
        } else
        {
            return ($lenA < $lenB) ? -1 : 1;
        }
    }
}
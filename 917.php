<?php

class Solution {

    /**
     * @param String $S
     * @return String
     */
    function reverseOnlyLetters($S)
    {
        $len = strlen($S);

        $i = 0;
        $j = $len - 1;

        while ($i < $j)
        {
            if ($this->isChar($S[$i]) && $this->isChar($S[$j]))
            {
                $this->swap($S, $i++, $j--);
                continue;
            }

            if (!$this->isChar($S[$i]))
            {
                ++$i;
            }

            if (!$this->isChar($S[$j]))
            {
                --$j;
            }
        }

        return $S;
    }

    function isChar($c)
    {
        if (($c >= 'a' && $c <= 'z') || ($c >= 'A' && $c <= 'Z'))
        {
            return true;
        }
        return false;
    }

    function swap(&$S, $i, $j)
    {
        $c = $S[$i];
        $S[$i] = $S[$j];
        $S[$j] = $c;
    }
}
<?php

class Solution {

    /**
     * @param String $S
     * @return String
     */
    function removeDuplicates($S)
    {
        $len = strlen($S);

        $stack = [];

        for ($i = 0; $i < $len; ++$i)
        {
            $c = $S[$i];

            if (end($stack) == $c)
            {
                array_pop($stack);
            } else
            {
                array_push($stack, $c);
            }
        }

        return implode('', $stack);
    }
}
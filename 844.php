<?php

class Solution {

    /**
     * @param String $S
     * @param String $T
     * @return Boolean
     *
     * 利用栈去完成，退格就是出栈
     */
    function backspaceCompare($S, $T)
    {
        $stackS = [];
        $stackT = [];

        $lenS = strlen($S);
        $lenT = strlen($T);

        for ($i = 0; $i < $lenS; ++$i)
        {
            if ('#' == $S[$i])
            {
                array_pop($stackS);
            } else
            {
                array_push($stackS, $S[$i]);
            }
        }

        for ($i = 0; $i < $lenT; ++$i)
        {
            if ('#' == $T[$i])
            {
                array_pop($stackT);
            } else
            {
                array_push($stackT, $T[$i]);
            }
        }

        while (!empty($stackS) || !empty($stackT))
        {
            $chrS = array_pop($stackS);
            $chrT = array_pop($stackT);

            if ($chrS != $chrT)
            {
                return false;
            }
        }

        return true;
    }
}
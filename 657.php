<?php

class Solution {

    /**
     * @param String $moves
     * @return Boolean
     */
    function judgeCircle($moves)
    {
        $arr = [];

        $len = strlen($moves);

        for ($i = 0; $i < $len; ++$i)
        {
            $arr[$moves[$i]]++;
        }

        return (0 == ($arr['L'] - $arr['R'])) && (0 == ($arr['U'] - $arr['D']));
    }
}
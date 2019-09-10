<?php

class Solution {

    /**
     * @param Integer[] $rec1
     * @param Integer[] $rec2
     * @return Boolean
     */
    function isRectangleOverlap($rec1, $rec2)
    {
        if (($rec2[0] < $rec1[2] && $rec2[2] > $rec1[0] && $rec2[1] < $rec1[3] && $rec2[3] > $rec1[1]))
        {
            return true;
        }

        return false;
    }
}
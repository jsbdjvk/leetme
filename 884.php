<?php

class Solution {

    /**
     * @param String $A
     * @param String $B
     * @return String[]
     */
    function uncommonFromSentences($A, $B)
    {
        $arrA = explode(' ', $A);
        $arrB = explode(' ', $B);

        $arrRepeatA = array_keys(array_filter(array_map(function ($v) {if ($v > 1) {return $v;} else { return 0;}}, array_count_values($arrA))));
        $arrRepeatB = array_keys(array_filter(array_map(function ($v) {if ($v > 1) {return $v;} else { return 0;}}, array_count_values($arrB))));

        return array_diff(array_merge(array_diff($arrA, $arrB), array_diff($arrB, $arrA)), array_merge($arrRepeatA, $arrRepeatB));
    }
}
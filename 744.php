<?php

class Solution {

    /**
     * @param String[] $letters
     * @param String $target
     * @return String
     */
    function nextGreatestLetter($letters, $target)
    {
        if ($target >= end($letters))
        {
            reset($letters);
            return current($letters);
        }

        foreach ($letters as $letter)
        {
            if ($letter > $target)
            {
                return $letter;
            }
        }
    }
}
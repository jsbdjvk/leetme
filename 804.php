<?php

class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function uniqueMorseRepresentations($words)
    {
        $arrMos = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",
            ".-.","...","-","..-","...-",".--","-..-","-.--","--.."];

        $setMos = []; // set集合

        $intBase = ord('a');

        foreach ($words as $val)
        {
            $len = strlen($val);
            $strMos = '';
            for ($i = 0; $i < $len; ++$i)
            {
                $strMos .= $arrMos[ord($val[$i]) - $intBase];
            }

            if (!in_array($strMos, $setMos))
            {
                $setMos[] = $strMos;
            }
        }

        return count($setMos);
    }
}
<?php

class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
        $map = [
            'q' => 1,
            'w' => 1,
            'e' => 1,
            'r' => 1,
            't' => 1,
            'y' => 1,
            'u' => 1,
            'i' => 1,
            'o' => 1,
            'p' => 1,
            'a' => 2,
            's' => 2,
            'd' => 2,
            'f' => 2,
            'g' => 2,
            'h' => 2,
            'j' => 2,
            'k' => 2,
            'l' => 2,
            'z' => 3,
            'x' => 3,
            'c' => 3,
            'v' => 3,
            'b' => 3,
            'n' => 3,
            'm' => 3,
        ];

        $arr = [];

        foreach ($words as $key => $val)
        {
            $val = strtolower($val);

            $flag = true;
            $len = strlen($val);

            for ($i = 1; $i < $len; ++$i)
            {
                if ($map[$val[$i]] != $map[$val[$i - 1]])
                {
                    $flag = false;
                    break;
                }
            }

            if ($flag)
            {
                $arr[] = $words[$key];
            }
        }

        return $arr;
    }
}
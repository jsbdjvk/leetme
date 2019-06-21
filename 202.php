<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     *
     */
    function isHappy($n)
    {
        $arr = [];
        $flag = true;

        $X = $n;

        while(1)
        {
            $new = 0;

            while ($X > 0)
            {
                $new += pow($X % 10, 2);
                $X = intval(floor($X / 10));
            }

            if (1 == $new) break;

            if (in_array($new, $arr))
            {
                $flag = false;
                break;
            }

            $arr[] = $new;
            $X = $new;
        }

        return $flag;
    }
}
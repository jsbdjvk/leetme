<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     *
     * 这题多举几个例子就可以看出来，就是9进制，只不过进一位的时候是9
     */
    function addDigits($num)
    {
        if (0 == $num) return 0;

        return $num % 9 ?: 9;
    }
}

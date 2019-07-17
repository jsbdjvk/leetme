<?php
class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n)
    {
        define('THREE', 'Fizz');
        define('FIVE', 'Buzz');
        define('THREEFIVE', 'FizzBuzz');

        $arr = [];

        for ($i = 1; $i <= $n; ++$i)
        {
            if (0 == ($i % 3) && 0 == ($i % 5))
            {
                array_push($arr, THREEFIVE);
            } else if (0 == ($i % 3))
            {
                array_push($arr, THREE);
            } else if (0 == ($i % 5))
            {
                array_push($arr, FIVE);
            } else
            {
                array_push($arr, strval($i));
            }
        }

        return $arr;
    }
}
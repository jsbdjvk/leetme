<?php

class Solution {

    /**
     * @param Integer $N
     * @return Integer
     */
    function fib($N)
    {
        if (0 == $N)
        {
            return 0;
        } else if (1 == $N)
        {
            return 1;
        } else {
            return ($this->fib($N - 1) + $this->fib($N - 2));
        }
    }

    function fibEx($N)
    {
        if (0 == $N)
        {
            return 0;
        } else if (1 == $N)
        {
            return 1;
        } else
        {
            $a = 0;
            $b = 1;

            for ($i = 2; $i <= $N; ++$i)
            {
                $tmp = $b;
                $b += $a;
                $a = $tmp;
            }

            return $b;
        }
    }
}
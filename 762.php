<?php

class Solution {

    private $primeMap = [2];

    /**
     * @param Integer $L
     * @param Integer $R
     * @return Integer
     *
     * 这个题可以用当前这种方法，也可以用列表法（题目中要求的[1, 10^6]，可以算一下10^6最多多少（假设x）个1，求出1到x所有质数，然后直接判断L - R所有数的1的个数是否在列表中）
     */
    function countPrimeSetBits($L, $R)
    {
        $total = 0;

        for ($i = $L; $i <= $R; ++$i)
        {
            $x = $this->countOne($i);
            $flag = $this->prime($x);
            if ($flag)
            {
                ++$total;
            }
        }

        return $total;
    }

    function countOne($n)
    {
        $x = log($n, 2);
        $intX = intval(floor($x));

        if ($x == $intX) return 1;

        return 1 + $this->countOne($n - pow(2, $intX));
    }

    function prime($n)
    {
        if (in_array($n, $this->primeMap)) return true;
        if (1 == $n || 0 == ($n % 2)) return false;

        $flag = true;

        $x = intval(floor(sqrt($n)));

        for ($i = 3; $i <= $x; $i += 2)
        {
            if (($n % $i) == 0)
            {
                $flag = false;
                break;
            }
        }

        if ($flag)
        {
            !in_array($n, $this->primeMap) && $this->primeMap[] = $n;
        }

        return $flag;
    }
}
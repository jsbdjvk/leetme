<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function numPrimeArrangements($n)
    {
        if ($n == 1)
        {
            return 1;
        }

        $primeCount = $this->getPrimeCount($n);

        return ($this->jiecheng($primeCount) * $this->jiecheng($n - $primeCount)) % 1000000007;
    }

    function getPrimeCount($n)
    {
        if ($n <= 1)
        {
            return 0;
        }

        $count = 1;

        for ($i = 3; $i <= $n; $i += 2)
        {
            $flag = true;
            $end = intval(floor(sqrt($i)));
            for ($j = 2; $j <= $end; ++$j)
            {
                if (($i % $j) == 0)
                {
                    $flag = false;
                    break;
                }
            }

            if ($flag)
            {
                $count++;
            }
        }

        return $count;
    }

    function jiecheng($n)
    {
        $res = 1;
        for ($i = 2; $i <= $n; ++$i)
        {
            $res *= $i;

            $res %= 1000000007;
        }

        return $res;
    }
}

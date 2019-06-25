<?php

class Solution {

    /**
     * @param String $S
     * @return Integer[]
     *
     *
     * IDID count('I') = 2 count('D') = 2
     * 23140
     *
     * III count('I') = 3
     * 0123
     *
     * DDI count('I') = 1 count('D') = 2
     * 2103
     *
     * I A[0] >= 0
     * D A[0] >= 1
     *
     * IDDIDIIIDIDI count('I') = 7 count('D') = 5
     * 56437289 10 1 11 0 12
     *
     * 结论：
     * 第一种方案：第一个数如果是字符串中字符'D'的个数，输出的数列肯定是符合规则的。
     */
    function diStringMatch($S)
    {
        $len = strlen($S);
        $D = substr_count($S, 'D');
        $I = ++$D;

        $arr = [$D--];

        for ($i = 0; $i < $len; ++$i)
        {
            $arr[$i+1] = 'I' == $S[$i] ? $I++ : $D--;
        }

        return $arr;
    }
}
<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     *
     * 解法：
     * 1、对s和t两个字符串所有字符进行异或，最后的值就是结果
     * 2、哈希表
     * 3、ASCII码计算
     */
    function findTheDifference($s, $t)
    {
        $sMap = [];
        $tMap = [];

        $slen = strlen($s);
        $tlen = strlen($t);

        for ($i = 0; $i < $slen; ++$i)
        {
            $sMap[$s[$i]]++;
        }

        for ($i = 0; $i < $tlen; ++$i)
        {
            $tMap[$t[$i]]++;
        }

        foreach ($tMap as $c => $count)
        {
            if (empty($sMap[$c]) || $count != $sMap[$c])
            {
                return $c;
            }
        }

        return '';
    }
}
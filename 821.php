<?php

class Solution {

    /**
     * @param String $S
     * @param String $C
     * @return Integer[]
     */
    function shortestToChar($S, $C)
    {
        $arrRet = [];

        $arrExplode = explode($C, $S);
        $explodeCount = count($arrExplode);

        // 1. 最前头倒序
        for ($i = strlen($arrExplode[0]); $i >= 0; --$i)
        {
            $arrRet[] = $i;
        }

        // 2. 中间所有的都是山峰模型处理
        for ($i = 1; $i < $explodeCount - 1; ++$i)
        {
            if ('' != $arrExplode[$i])
            {
                $midLen = strlen($arrExplode[$i]);
                if ($midLen > 1)
                {
                    $half = intval(floor($midLen / 2));
                    $arrRet = array_merge($arrRet, range(1, $half));
                    ($midLen % 2) && ($arrRet[] = $half + 1);
                    $arrRet = array_merge($arrRet, range($half, 1));
                } else
                {
                    $arrRet[] = 1;
                }
            }
            $arrRet[] = 0;
        }

        // 3. 结尾正序
        $endLen = strlen(end($arrExplode));
        for ($i = 1; $i <= $endLen; ++$i)
        {
            $arrRet[] = $i;
        }

        return $arrRet;
    }
}
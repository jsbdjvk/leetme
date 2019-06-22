<?php

class Solution {

    /**
     * @param String $S
     * @return String
     * (()())(()) -> ()()()
     * (()())(())(()(())) -> ()()()()(())
     */
    function removeOuterParentheses($S)
    {
        $str = ''; // 记录最后输出的字符串
        $intCount = 0; // 括号计数器，遇到(加1，遇到)减1，知道减到0，中间所有的括号即为原语

        $lenS = strlen($S);

        for ($i = 0; $i < $lenS; ++$i)
        {
            if ('(' == $S[$i]) {
                ++$intCount;
                if (1 == $intCount) continue; // 跳过最左的括号
            } else if (')' == $S[$i]) {
                --$intCount;
            } else
            {
                continue;
            }

            if (0 < $intCount) $str .= $S[$i];
        }

        return $str;
    }
}
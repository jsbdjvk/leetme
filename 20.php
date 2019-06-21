<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $len = strlen($s);
        $arrTmp = [];
        $flag = true;

        for ($i = 0; $i < $len; ++$i)
        {
            $char = substr($s, $i, 1);
            if (' ' == $char)
            {
                continue;
            }

            $charPop = array_pop($arrTmp);

            if (in_array($char, ['(', '[', '{']))
            {
                $charPop && array_push($arrTmp, $charPop);
                array_push($arrTmp, $char);
            } else
            {
                if (('(' != $charPop && ')' == $char) || ('[' != $charPop && ']' == $char) || ('{' != $charPop && '}' == $char))
                {
                    $flag = false;
                    break;
                }
            }
        }

        if (!empty($arrTmp))
        {
            $flag = false;
        }

        return $flag;
    }
}
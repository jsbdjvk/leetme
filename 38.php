<?php

class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n)
    {
        $str = '1';
        for ($i = 1; $i < $n; ++$i)
        {
            $len = strlen($str);

            $cnt = 0;
            $num = '';
            $strR = '';

            for ($j = 0; $j < $len; ++$j)
            {
                if ($num == $str[$j])
                {
                    ++$cnt;
                    continue;
                }
                ($cnt > 0) && ($strR .= $cnt . $num);
                $cnt = 1;
                $num = $str[$j];
            }

            ($cnt > 0) && ($strR .= $cnt . $num);

            $str = $strR;
        }

        return $str;
    }
}

$obj = new Solution();
var_dump($obj->countAndSay(1));

//for ($i = 1; $i <= 30; ++$i)
//{
//    var_dump($obj->countAndSay($i));
//}
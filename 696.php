<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countBinarySubstrings($s) {
        $len = strlen($s);

        $res = 0;

        for ($i = 0; $i < $len;)
        {
            $up = true;
            $jishu = 0;
            $perlen = 0;
            //var_dump($i);

            for ($j = $i; $j < $len; ++$j)
            {
                //var_dump($i . ' - ' . $j);
                if ($s[$i] == $s[$j])
                {
                    if (!$up)
                    {
                        $i += $jishu;
                        break;
                    }
                    ++$jishu;
                    ++$perlen;

                } else
                {
                    $up = false;
                    --$jishu;
                    ++$perlen;

                    if ($jishu <= 0)
                    {
                        $res += $perlen/2;
                        $i += $perlen/2;
                        break;
                    }
                }
            }

            if ($j == $len) ++$i;
        }

        return $res;
    }
}
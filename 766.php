<?php

class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Boolean
     *
     * 考虑磁盘/内存有限，仅能存储一行的话，先存第一行，后续每行一个数一个数输入（这个以下程序未体现）
     */
    function isToeplitzMatrix($matrix)
    {
        $arr = current($matrix);
        next($matrix);

        $arr = array_reverse($arr);
        array_shift($arr);

        while ($curr = current($matrix))
        {
            $curr = array_reverse($curr);

            foreach ($arr as $key => $val)
            {
                if ($val != $curr[$key]) return false;
            }

            array_shift($curr);
            $arr = $curr;

            next($matrix);
        }


        return true;
    }
}
<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val)
    {
        //$cntOri = count($nums);

        $nums = array_values(array_filter($nums, function ($v) use ($val) {if ($v == $val) {return false;} else return true;}));

        //return ($cntOri - count($nums));
        return count($nums);
    }

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElementEx(&$nums, $val)
    {
        $cnt = count($nums);
        for ($i = 0, $j = 0; $i < $cnt; ++$i)
        {
            if ($nums[$i] != $val)
            {
                if ($i != $j)
                {
                    $nums[$j] = $nums[$i];
                }
                ++$j;
            }
        }
        return $j;
    }
}
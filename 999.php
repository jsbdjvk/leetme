<?php

class Solution {

    /**
     * @param String[][] $board
     * @return Integer
     */
    function numRookCaptures($board) {

        $total = 0; // 记录吃掉几个卒

        $x = -1;
        $y = -1;

        foreach ($board as $key => $val)
        {
            $x = array_search('R', $val);
            if (false !== $x)
            {
                $y = $key;
                break;
            }
        }

        $j = $x - 1;

        while ($j >= 0)
        {
            if ('B' == $board[$y][$j]) break;
            if ('p' == $board[$y][$j])
            {
                ++$total;
                break;
            }
            --$j;
        }

        $j = $x + 1;

        while ($j <= 8)
        {
            if ('B' == $board[$y][$j]) break;
            if ('p' == $board[$y][$j])
            {
                ++$total;
                break;
            }
            ++$j;
        }

        $i = $y - 1;

        while ($i >= 0)
        {
            if ('B' == $board[$i][$x]) break;
            if ('p' == $board[$i][$x])
            {
                ++$total;
                break;
            }
            --$i;
        }

        $i = $y + 1;

        while ($i <= 8)
        {
            if ('B' == $board[$i][$x]) break;
            if ('p' == $board[$i][$x])
            {
                ++$total;
                break;
            }
            ++$i;
        }

        return $total;
    }
}
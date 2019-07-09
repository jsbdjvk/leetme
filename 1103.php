<?php

class Solution {

    /**
     * @param Integer $candies
     * @param Integer $num_people
     * @return Integer[]
     *
     * 第i个小朋友会分到 sum(0*N+i) (i=1,2,...,N);
     * 1 2 3;6
     * 4 5 6;15
     * 7 8 9;24
     * 矩阵总和（总糖果数）：sum(range(1, $num_people))*$row + sum(range(0, $row - 1))*$num_people*$num_people
     * 矩阵列总和（每个孩子领到的糖果数）：$row * $i + sum(range(0, $row - 1))*$num_people
     * 矩阵每个点的数（每次发给孩子糖果数）：$i + ($row - 1)*$num_people
     *
     */
    function distributeCandies($candies, $num_people)
    {
        $arr = []; // 存储最后每个孩子分到的糖果数


        $sum = 0; // 如果每个孩子发的次数相同，总共需要sum个糖果
        $row = 0; // 发了几轮糖果发完了

        while ($sum < $candies)
        {
            ++$row;
            $sum = array_sum(range(1, $num_people)) * $row
                + array_sum(range(0, $row - 1)) * $num_people * $num_people;
        }

        // 如果仅有一轮，当前总和即为0
        if (1 == $row)
        {
            $sum = 0;
        } else
        {
            // 先计算每个小孩发了一样的次数（即$row - 1轮），最后再依次发完剩下的糖果
            $row--;
            $sum = array_sum(range(1, $num_people)) * $row
                + array_sum(range(0, $row - 1)) * $num_people * $num_people;
            $row++;
        }

        // 发完$row - 1轮后剩余糖果数
        $candies -= $sum;

        // 计算最后一轮发的糖果
        for ($i = 1; $i <= $num_people; ++$i)
        {
            if ($candies > 0)
            {
                $get = $i + ($row - 1) * $num_people;

                $arr[$i - 1] = min($get, $candies);

                $candies -= $arr[$i - 1];
            } else
            {
                $arr[$i - 1] = 0;
            }
        }

        // 最后一轮发的糖果 + 前几轮发的糖果
        if (1 < $row)
        {
            $row--;
            for ($i = 1; $i <= $num_people; ++$i)
            {
                $arr[$i - 1] += $row * $i + array_sum(range(0, $row - 1)) * $num_people;
            }
        }

        return $arr;
    }
}
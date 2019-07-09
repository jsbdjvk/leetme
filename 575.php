<?php

class Solution {

    /**
     * @param Integer[] $candies
     * @return Integer
     */
    function distributeCandies($candies)
    {
        $set = [];
        $count = 0;

        $half = intval(count($candies) / 2);

        foreach ($candies as $candy)
        {
            if (!in_array($candy, $set))
            {
                array_push($set, $candy);
                $count++;
                if ($count >= $half) break;
            }
        }

        return $count;
    }

    // 去重
    function distributeCandiesEx($candies)
    {
        $half = intval(count($candies) / 2);

        $candies = array_unique($candies);

        $count = count($candies);

        return ($count > $half) ? $half : $count;
    }
}
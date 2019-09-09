<?php

class Solution {

    /**
     * @param Integer $N
     * @param Integer[][] $paths
     * @return Integer[]
     *
     * 染色问题，相邻花园不能重色
     */
    function gardenNoAdj($N, $paths)
    {
        $res = [];

        $map = [];

        foreach ($paths as $path)
        {
            $map[$path[0]][] = $path[1];
            $map[$path[1]][] = $path[0];
        }

        $flower = range(1, 4);

        for ($i = 1; $i <= $N; ++$i)
        {
            if (!isset($map[$i]))
            {
                $res[$i] = 1;
            } else
            {
                $use_flower = [];
                foreach ($map[$i] as $item)
                {
                    if (isset($res[$item]))
                    {
                        $use_flower[] = $res[$item];
                    }
                }

                $res[$i] = current(array_diff($flower, $use_flower));
            }
        }

        return array_values($res);
    }
}
<?php

class Solution {

    /**
     * @param Integer $N
     * @param Integer[][] $trust
     * @return Integer
     */
    function findJudge($N, $trust)
    {
        $trustList = [];
        $except = [];

        if ($N == 1 && empty($trust))
        {
            return 1;
        }

        foreach ($trust as $t)
        {
            if (isset($trustList[$t[0]]))
            {
                $trustList[$t[0]] = [];
                $except[] = $t[0];
            }

            if (in_array($t[1], $except))
            {
                continue;
            }

            $except[] = $t[0];
            $trustList[$t[1]][] = $t[0];
        }

        $trustList = array_diff_key($trustList, array_flip($except));

        if (empty($trustList) || count($trustList) > 1)
        {
            return -1;
        }

        $res = key($trustList);

        $trustList = current($trustList);

        array_push($trustList, $res);

        $diff = array_diff(range(1, $N), $trustList);

        return empty($diff) ? $res : -1;
    }
}
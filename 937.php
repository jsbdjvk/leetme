<?php

class Solution {

    /**
     * @param String[] $logs
     * @return String[]
     */
    function reorderLogFiles($logs)
    {
        if (empty($logs))
        {
            return [];
        }

        $chrLog = [];
        $digLog = [];

        foreach ($logs as $log)
        {
            $chr = substr($log, strpos($log, ' ') + 1, 1);
            if ($chr >= '0' && $chr <= '9')
            {
                $digLog[] = $log;
            } else
            {
                $chrLog[] = $log;
            }
        }

        foreach ($chrLog as $key => $log)
        {
            $spacePos = strpos($log, ' ');
            $chrLog[$key] = substr($log, $spacePos + 1) . ' ' . substr($log, 0, $spacePos);
        }

        sort($chrLog);

        foreach ($chrLog as $key => $log)
        {
            $spacePos = strrpos($log, ' ');
            $chrLog[$key] = substr($log, $spacePos + 1) . ' ' . substr($log, 0, $spacePos);
        }

        return array_merge($chrLog, $digLog);
    }
}
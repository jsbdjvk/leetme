<?php

class Solution {

    /**
     * @param String[] $emails
     * @return Integer
     */
    function numUniqueEmails($emails)
    {
        foreach ($emails as $key => $val)
        {
            $exp1 = explode('@', $val);
            $exp2 = explode('+', $exp1[0]);
            $emails[$key] = str_replace('.', '', $exp2[0]) . '@' . $exp1[1];
        }

        return count(array_unique($emails));
    }
}
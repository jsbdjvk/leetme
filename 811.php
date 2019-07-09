<?php

class Solution {

    /**
     * @param String[] $cpdomains
     * @return String[]
     */
    function subdomainVisits($cpdomains)
    {
        $arr = [];

        foreach ($cpdomains as $val)
        {
            $this->explodeStr($val, $arr);
        }

        foreach ($arr as $key => $val)
        {
            $arr[$key] = $val . ' ' . $key;
        }
        return array_values($arr);
    }

    function explodeStr($str, &$arr)
    {
        list($count, $domain) = explode(' ', $str);

        $arr[$domain] += $count;

        while ($domain = ltrim(strstr($domain, '.'), '.'))
        {
            $arr[$domain] += $count;
        }

        return $arr;
    }
}
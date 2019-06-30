<?php

class RecentCounter {

    private $records = [];
    private $records_len = 0;

    /**
     */
    function __construct() {

    }

    /**
     * @param Integer $t
     * @return Integer
     */
    function ping($t)
    {
        $this->record($t);

        $cnt = 0;

        for ($i = $this->records_len - 1; $i >= 0; -- $i)
        {
            if (($t - $this->records[$i]) <= 3000) {
                ++$cnt;
            } else
            {
                break;
            }
        }

        return $cnt;
    }

    function record($t)
    {
        array_push($this->records, $t);
        $this->records_len++;
    }
}

/**
 * Your RecentCounter object will be instantiated and called as such:
 * $obj = RecentCounter();
 * $ret_1 = $obj->ping($t);
 */

$obj = new RecentCounter();
$ret_1 = $obj->ping(1);
$ret_1 = $obj->ping(100);
$ret_1 = $obj->ping(3001);
$ret_1 = $obj->ping(3002);
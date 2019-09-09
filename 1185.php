<?php

class Solution {

    /**
     * @param Integer $day
     * @param Integer $month
     * @param Integer $year
     * @return String
     */
    function dayOfTheWeek($day, $month, $year) {
        return date('l', strtotime($year . '-' . $month . '-' . $day));
    }
}
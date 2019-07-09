<?php

class Solution {

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address)
    {
        return str_replace('.', '[.]', $address);
    }
}
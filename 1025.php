<?php

class Solution {

    /**
     * @param Integer $N
     * @return Boolean
     *
     */
    function divisorGame($N)
    {
        return ($N % 2) ? false : true;
    }
}

//N = 1
//A false
//
//N = 2
//A -> 1
//N = 2 - 1 = 1
//A true
//
//N = 3
//A -> 1
//N = 3 - 1 = 2
//B -> 1
//N = 2 - 1 = 1
//A false
//
//N = 4
//A -> 1
//N = 4 - 1 = 3
//B -> 1
//N = 3 - 1 = 2
//A -> 1
//N = 2 - 1 = 1
//A true
//
//N = 5
//A -> 1
//B -> F(4) = true
//A false
//
//N = 6
//A -> (1|2|3)
//B -> F(5) = false, F(4) = true, F(3) = false
//A true
//
//N = 7
//A -> 1
//B -> F(6) = true
//A false
//
//N = 8
//A -> (1|2|4)
//B -> F(7) = false, F(6) = true, F(4) = true
//A true
//
//N = 9
//A -> (1|3)
//B -> F(8) = true, F(6) = true
//A false
//
//N = 10
//A -> (1,2,5)
//B -> F(9) = false, F(8) = true, F(5) = false
//A true
//
//N = 11
//A -> 1
//B -> F(10) = true
//A false
//
//N = 12
//A -> (1,2,3,4,6)
//B -> F(11) = false, F(10) = true, F(9) = false, F(8) = true, F(6) = true
//A true
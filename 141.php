<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $pos
     * @return Boolean
     */
    function hasCycle($head, $pos)
    {
        $pointer1 = $head;
        $pointer2 = $head->next;

        while (null !== $pointer1 && null !== $pointer2)
        {
            if ($pointer1 === $pointer2)
            {
                return true;
            }
            $pointer1 = $pointer1->next;
            $pointer2 = $pointer1->next->next;
        }

        return false;
    }
}
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
     * @return ListNode
     */
    function reverseList($head)
    {
        $headNew = null;

        while (null != $head)
        {
            $tmp = $head->next;
            $head->next = $headNew;
            $headNew = $head;
            $head = $tmp;
        }

        return $headNew;
    }
}
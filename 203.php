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
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val)
    {
        while ($val == $head->val)
        {
            $head = $head->next;
        }

        if (null == $head)
        {
            return null;
        }

        $headOri = $head;

        while ($head->next)
        {
            if ($val == $head->next->val)
            {
                $tmp = $head->next->next;
                unset($head->next);
                $head->next = $tmp;
            } else
            {
                $head = $head->next;
            }
        }

        return $headOri;
    }
}
<?php

/**
 * Definition for a singly-linked list.
 */
  class ListNode {
      public $val = 0;
      public $next = null;
      function __construct($val) { $this->val = $val; }
  }

class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head)
    {
        if (empty($head)) return $head;

        $headOri = $head;

        while ($head)
        {
            if ($head->val == $head->next->val)
            {
                $tmp = $head->next;
                $head->next = $head->next->next;
                unset($tmp);
                continue;
            }

            $head = $head->next;
        }

        return $headOri;
    }
}
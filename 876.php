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
     *
     * 本题考虑两种方案：
     * 1. 先计算链表长度，再从头走一半的距离
     * 2. 两个指针，一个每次走一步，一个每次走两步，最后走一步的位置即为中间节点
     */
    function middleNode($head)
    {
        // 1. 计算链表长度
        $len = 0;
        $headCopy = $head;
        while ($head)
        {
            $len++;
            $head = $head->next;
        }

        $mid = is_integer($len / 2) ? ($len / 2 + 1) : intval(ceil($len / 2));

        // 2. 从头结点走一半即为中间节点
        while (--$mid > 0)
        {
            $headCopy = $headCopy->next;
        }

        return $headCopy;
    }

    function middleNodeEx($head)
    {
        $nodeOne = $head;
        $nodeTwo = $head->next;

        while ($nodeTwo)
        {
            $nodeOne = $nodeOne->next;
            $nodeTwo = $nodeTwo->next->next;
        }

        return $nodeOne;
    }
}
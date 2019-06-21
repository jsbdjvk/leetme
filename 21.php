<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2)
    {
        $lret = $lnow = null;

        if (null == $l1) return $l2;
        if (null == $l2) return $l1;

        while ($l1 || $l2)
        {
            if (null == $lret)
            {
                if ($l1->val < $l2->val)
                {
                    $lret = new ListNode($l1->val);
                    $l1 = $l1->next;
                } else
                {
                    $lret = new ListNode($l2->val);
                    $l2 = $l2->next;
                }
                $lnow = $lret;
            } else
            {
                if (null == $l1)
                {
                    $lnow->next = $l2;
                    break;
                }
                if (null == $l2)
                {
                    $lnow->next = $l1;
                    break;
                }
                if ($l1->val < $l2->val)
                {
                    $lnow->next = new ListNode($l1->val);
                    $lnow = $lnow->next;
                    $l1 = $l1->next;
                } else
                {
                    $lnow->next = new ListNode($l2->val);
                    $lnow = $lnow->next;
                    $l2 = $l2->next;
                }
            }
        }

        return $lret ?: ($l1 ?: $l2);
    }


    /** 数据量一上来就GG了
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoListsEx($l1, $l2)
    {
        $lret = null;
        $arrTmp = [];

        while($l1)
        {
            $arrTmp[] = $l1->val;
            $l1 = $l1->next;
        }

        while($l2)
        {
            $arrTmp[] = $l2->val;
            $l2 = $l2->next;
        }

        sort($arrTmp);

        foreach ($arrTmp as $val)
        {
            $lnode = new ListNode($val);
            if (null == $lret)
            {
                $lret = $ltmp = $lnode;
                continue;
            }
            $ltmp->next = $lnode;
            $ltmp = $lnode;
        }

        return $lret;
    }
}

$arr1 = [1, 2, 4];
$arr2 = [1, 3, 4];

$l1 = null;
$l2 = null;

foreach ($arr1 as $val)
{
    $lnode = new ListNode($val);
    if (null == $l1)
    {
        $l1 = $ltmp = $lnode;
        continue;
    }
    $ltmp->next = $lnode;
}

foreach ($arr2 as $val)
{
    $lnode = new ListNode($val);
    if (null == $l2)
    {
        $l2 = $ltmp = $lnode;
        continue;
    }
    $ltmp->next = $lnode;
}

var_dump((new Solution())->mergeTwoLists($l1, $l2));
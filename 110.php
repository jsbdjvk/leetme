<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isBalanced($root)
    {
        return $this->isBalancedEx($root);
    }

    function isBalancedEx($root, &$pHeight = 0)
    {
        if (null == $root)
        {
            $pHeight = 0;
            return true;
        }

        $lHeight = 0;
        $rHeight = 0;

        $lBalance = $this->isBalancedEx($root->left, $lHeight);
        $rBalance = $this->isBalancedEx($root->right, $rHeight);

        $pHeight = max($lHeight, $rHeight) + 1;

        if (!$lBalance || !$rBalance)
        {
            return false;
        }

        $diff = abs($lHeight - $rHeight);

        if ($diff > 1)
        {
            return false;
        }

        return true;
    }
}
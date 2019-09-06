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
     * @param Integer $sum
     * @return Boolean
     */
    function hasPathSum($root, $sum)
    {
        if (null == $root)
        {
            return false;
        }

        return $this->hasPathSumEx($root, $sum);
    }

    function hasPathSumEx($root, $sum, $total = 0)
    {
        $total += $root->val;

        if (null == $root->left && null == $root->right)
        {
            return ($sum == $total) ? true : false;
        } else if (null == $root->left)
        {
            return $this->hasPathSumEx($root->right, $sum, $total);
        } else if (null == $root->right)
        {
            return $this->hasPathSumEx($root->left, $sum, $total);
        } else
        {
            return ($this->hasPathSumEx($root->left, $sum, $total) | $this->hasPathSumEx($root->right, $sum, $total));
        }
    }
}
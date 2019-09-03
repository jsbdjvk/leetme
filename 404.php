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
     * @return Integer
     */
    function sumOfLeftLeaves($root)
    {
        if (null == $root)
        {
            return 0;
        }

        $sum = 0;

        if (null != $root->left && null == $root->left->left && null == $root->left->right)
        {
            $sum += $root->left->val;
        }

        $sum += $this->sumOfLeftLeaves($root->left);
        $sum += $this->sumOfLeftLeaves($root->right);

        return $sum;
    }
}
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
    function isUnivalTree($root)
    {
        if (null == $root) return true;

        if (!is_null($root->left) && $root->val != $root->left->val) return false;
        if (!is_null($root->right) && $root->val != $root->right->val) return false;

        return ($this->isUnivalTree($root->left) && $this->isUnivalTree($root->right)) ? true : false;
    }
}
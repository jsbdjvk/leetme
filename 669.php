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
     * @param Integer $L
     * @param Integer $R
     * @return TreeNode
     */
    function trimBST($root, $L, $R)
    {
        if (null == $root) return null;

        if ($root->val < $L)
        {
            return $this->trimBST($root->right, $L, $R);
        } else if ($root->val > $R)
        {
            return $this->trimBST($root->left, $L, $R);
        } else
        {
            $root->left = $this->trimBST($root->left, $L, $R);
            $root->right = $this->trimBST($root->right, $L, $R);
            return $root;
        }
    }
}
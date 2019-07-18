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
     * @return String[]
     */
    function binaryTreePaths($root)
    {
        if (null == $root) return [];

        if (null == $root->left && null == $root->right)
        {
        } else if (null == $root->left)
        {
            $arr = $this->binaryTreePaths($root->right);
        } else if (null == $root->right)
        {
            $arr = $this->binaryTreePaths($root->left);

        } else
        {
            $arr = array_merge($this->binaryTreePaths($root->left), $this->binaryTreePaths($root->right));
        }

        if (empty($arr))
        {
            $arr = [strval($root->val)];
        } else
        {
            foreach ($arr as &$val)
            {
                $val = strval($root->val) . '->' . $val;
            }
        }

        return $arr;
    }
}
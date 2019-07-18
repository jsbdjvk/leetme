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
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return Boolean
     */
    function leafSimilar($root1, $root2)
    {
        $leaf1 = $this->leafOrder($root1);
        $leaf2 = $this->leafOrder($root2);

        $flag = true;

        foreach ($leaf1 as $key => $val)
        {
            if ($val != $leaf2[$key])
            {
                $flag = false;
                break;
            }
        }

        return $flag;
    }

    function leafOrder($root)
    {
        if (null == $root) return [];

        if (null == $root->left && null == $root->right) return [$root->val];

        return array_merge($this->leafOrder($root->left), $this->leafOrder($root->right));
    }
}
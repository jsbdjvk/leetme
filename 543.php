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
    function diameterOfBinaryTree($root)
    {
        if (null == $root)
        {
            return 0;
        }

        $maxDistance = 0;

        $this->diameterOfBinaryTreeEx($root, $maxDistance);

        return $maxDistance;
    }

    function diameterOfBinaryTreeEx($root, &$maxDistance = 0)
    {
        if (null == $root)
        {
            return 0;
        } else
        {
            $left = $this->diameterOfBinaryTreeEx($root->left, $maxDistance);
            $right = $this->diameterOfBinaryTreeEx($root->right, $maxDistance);

            $left += null != $root->left ? 1 : 0;
            $right += null != $root->right ? 1 : 0;

            $maxDistance = max($maxDistance, ($left + $right));

            return max($left, $right);
        }
    }
}
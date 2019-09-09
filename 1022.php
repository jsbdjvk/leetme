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
    function sumRootToLeaf($root)
    {
        if (null == $root)
        {
            return 0;
        }

        $sum = 0;

        $this->sumRootToLeafEx($root, '', $sum);

        return $sum % (intval(pow(10, 9) + 7));
    }

    function sumRootToLeafEx($root, $binNum = '', &$sum = 0)
    {
        if (null == $root->left && null == $root->right)
        {
            $binNum .= $root->val;
            $sum += bindec($binNum);
            return;
        } else if (null == $root->left)
        {
            $this->sumRootToLeafEx($root->right, $binNum . $root->val, $sum);
        } else if (null == $root->right)
        {
            $this->sumRootToLeafEx($root->left, $binNum . $root->val, $sum);
        } else
        {
            $this->sumRootToLeafEx($root->left, $binNum . $root->val, $sum);
            $this->sumRootToLeafEx($root->right, $binNum . $root->val, $sum);
        }
    }
}
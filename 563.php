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
    function findTilt($root) {
        if (null == $root)
        {
            return 0;
        }

        $total = 0;

        $this->findTiltEx($root, $total);

        return $total;
    }

    function findTiltEx($root, &$total = 0) {
        if (null == $root->left && null == $root->right)
        {
            return $root->val;
        } else if (null == $root->left)
        {
            $right = $this->findTiltEx($root->right, $total);

            $total += abs($right);

            return $right + $root->val;
        } else if (null == $root->right)
        {
            $left = $this->findTiltEx($root->left, $total);

            $total += abs($left);

            return $left + $root->val;
        } else
        {
            $left = $this->findTiltEx($root->left, $total);
            $right = $this->findTiltEx($root->right, $total);

            $total += abs($left - $right);

            return $left + $right + $root->val;
        }
    }
}

// 8 -> 0
// -1 -> 8
// -8 -> 7
// 3 -> 1
// 0 -> 0
// -8 -> 2

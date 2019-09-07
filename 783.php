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
    function minDiffInBST($root)
    {
        $maxVal = null;
        $minDiff = 0x3f3f3f3f;
        $this->minBST($root, $maxVal, $minDiff);

        return $minDiff;
    }

    function minBST($root, &$maxVal = null, &$minDiff = 0x3f3f3f3f)
    {
        if (null == $root->left && null == $root->right)
        {
            if ($maxVal !== null)
            {
                $minDiff = min(abs($maxVal - $root->val), $minDiff);
                $maxVal = max($maxVal, $root->val);
            } else
            {
                $maxVal = $root->val;
            }
            return;
        } else if (null == $root->left)
        {
            if ($maxVal !== null)
            {
                $minDiff = min(abs($maxVal - $root->val), $minDiff);
                $maxVal = max($maxVal, $root->val);
            } else
            {
                $maxVal = $root->val;
            }
            $this->minBST($root->right, $maxVal, $minDiff);
        } else if (null == $root->right)
        {
            $this->minBST($root->left, $maxVal, $minDiff);
            $minDiff = min(abs($maxVal - $root->val), $minDiff);
            $maxVal = max($maxVal, $root->val);
        } else
        {
            $this->minBST($root->left, $maxVal, $minDiff);
            $minDiff = min(abs($maxVal - $root->val), $minDiff);
            $maxVal = max($maxVal, $root->val);
            $this->minBST($root->right, $maxVal, $minDiff);
        }
    }
}
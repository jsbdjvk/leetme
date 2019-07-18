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
     * @return TreeNode
     */
    function increasingBST($root)
    {
        if (null == $root) return null;

        $arr = $this->midOrder($root);

        $newRoot = new TreeNode(array_shift($arr));
        $newRootCp = $newRoot;
        foreach ($arr as $val)
        {
            $node = new TreeNode($val);
            $newRootCp->right = $node;
            $newRootCp = $node;
        }

        return $newRoot;
    }

    function midOrder($root)
    {
        if (null == $root) return [];

        if (null == $root->left && null == $root->right)
        {
            return [$root->val];
        } else if (null == $root->left)
        {
            return array_merge([$root->val], $this->midOrder($root->right));
        } else if (null == $root->right)
        {
            return array_merge($this->midOrder($root->left), [$root->val]);
        } else
        {
            return array_merge($this->midOrder($root->left), [$root->val], $this->midOrder($root->right));
        }
    }
}
<?php

/**
 * Definition for a binary tree node.
 */
class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($value) { $this->val = $value; }
}
class Solution {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function invertTree($root)
    {
        if (null == $root->left && null == $root->right) return $root;

        $tmp = $root->left;
        $root->left = $root->right;
        $root->right = $tmp;

        $root->left = $this->invertTree($root->left);
        $root->right = $this->invertTree($root->right);

        return $root;
    }
}

$node = new TreeNode(4);
$root = $node;

$node = new TreeNode(2);
$root->left = $node;

$node = new TreeNode(7);
$root->right = $node;

$node = new TreeNode(1);
$root->left->left = $node;

$node = new TreeNode(3);
$root->left->right = $node;

$node = new TreeNode(6);
$root->right->left = $node;

$node = new TreeNode(9);
$root->right->right = $node;

$obj = new Solution();
var_dump($obj->invertTree($root));
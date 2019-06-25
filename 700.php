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
     * @param Integer $val
     * @return TreeNode
     */
    function searchBST($root, $val)
    {
        if (null == $root) return null;

        if ($root->val > $val)
        {
            return $this->searchBST($root->left, $val);
        } else if ($root->val <  $val)
        {
            return $this->searchBST($root->right, $val);
        } else {
            return $root;
        }
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

$obj = new Solution();
var_dump($obj->searchBST($root, 2));
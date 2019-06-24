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
     * @param TreeNode $t1
     * @param TreeNode $t2
     * @return TreeNode
     */
    function mergeTrees($t1, $t2)
    {
        if (null == $t1) return $t2;
        if (null == $t2) return $t1;

        $t1->val += $t2->val;

        $t1->left = $this->mergeTrees($t1->left, $t2->left);
        $t1->right = $this->mergeTrees($t1->right, $t2->right);

        return $t1;
    }
}


$node = new TreeNode(1);
$root1 = $node;

$node = new TreeNode(3);
$root1->left = $node;

$node = new TreeNode(2);
$root1->right = $node;

$node = new TreeNode(5);
$root1->left->left = $node;

$node = new TreeNode(2);
$root2 = $node;

$node = new TreeNode(1);
$root2->left = $node;

$node = new TreeNode(3);
$root2->right = $node;

$node = new TreeNode(4);
$root2->left->right = $node;

$node = new TreeNode(7);
$root2->right->right = $node;

$obj = new Solution();
var_dump($obj->mergeTrees($root1, $root2));
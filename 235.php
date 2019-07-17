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
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    function lowestCommonAncestor($root, $p, $q)
    {
        if (null == $root) return null;

        if ($p->val < $q->val)
        {
            if ($root->val > $q->val)
            {
                return $this->lowestCommonAncestor($root->left, $p, $q);
            } else if ($root->val < $p->val)
            {
                return $this->lowestCommonAncestor($root->right, $p, $q);
            } else
            {
                return $root;
            }
        } else
        {
            if ($root->val > $p->val)
            {
                return $this->lowestCommonAncestor($root->left, $p, $q);
            } else if ($root->val < $q->val)
            {
                return $this->lowestCommonAncestor($root->right, $p, $q);
            } else
            {
                return $root;
            }
        }
    }
}

$root = new TreeNode(6);

$node = new TreeNode(2);
$root->left = $node;

$node = new TreeNode(8);
$root->right = $node;

$node = new TreeNode(0);
$root->left->left = $node;

$node = new TreeNode(4);
$root->left->right = $node;

$node = new TreeNode(3);
$root->left->right->left = $node;

$node = new TreeNode(5);
$root->left->right->right = $node;

$node = new TreeNode(7);
$root->right->left = $node;

$node = new TreeNode(9);
$root->right->right = $node;



$p = new TreeNode(2);

$q = new TreeNode(8);

$obj = new Solution();
var_dump($obj->lowestCommonAncestor($root, $p, $q));
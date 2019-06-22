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
     * @param Integer $L
     * @param Integer $R
     * @return Integer
     */
    function rangeSumBST($root, $L, $R)
    {
        if (null == $root || $L > $R) return 0;

        $sum = 0;

        if ($root->val > $R)
        {
            $sum += $this->rangeSumBST($root->left, $L, $R);
        } else if ($root->val <  $L)
        {
            $sum += $this->rangeSumBST($root->right, $L, $R);
        } else {
            $sum += $root->val;
            $sum += $this->rangeSumBST($root->left, $L, $R);
            $sum += $this->rangeSumBST($root->right, $L, $R);
        }

        return $sum;
    }
}

$node = new TreeNode(10);
$root = $node;

$node = new TreeNode(5);
$root->left = $node;

$node = new TreeNode(15);
$root->right = $node;

$node = new TreeNode(3);
$root->left->left = $node;

$node = new TreeNode(7);
$root->left->right = $node;

$node = new TreeNode(13);
$root->right->left = $node;

$node = new TreeNode(18);
$root->right->right = $node;

$node = new TreeNode(1);
$root->left->left->left = $node;

$node = new TreeNode(6);
$root->left->right->left = $node;

$obj = new Solution();
var_dump($obj->rangeSumBST($root, 6, 10));
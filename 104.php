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
     * @return Integer
     */
    function maxDepth($root)
    {
        if ($root == null) {
            return 0;
        } else {
            $left_height = $this->maxDepth($root->left);
            $right_height = $this->maxDepth($root->right);
            return max($left_height, $right_height) + 1;
        }
    }
}


$node = new TreeNode(1);
$root = $node;

$node = new TreeNode(2);
$root->left = $node;

$node = new TreeNode(2);
$root->right = $node;

$node = new TreeNode(3);
$root->left->left = $node;

$node = new TreeNode(4);
$root->left->right = $node;

$node = new TreeNode(4);
$root->right->left = $node;

$node = new TreeNode(3);
$root->right->right = $node;

$obj = new Solution();
var_dump($obj->maxDepth($root));
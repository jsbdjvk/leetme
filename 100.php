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
     * @return Boolean
     */
    function isSameTree($p, $q)
    {
        if ($p->val != $q->val) return false;

        $leftFlag = $this->isSameTree($p->left, $q->left);
        $rightFlag = $this->isSameTree($p->right, $q->right);

        return $leftFlag && $rightFlag;
    }
}

$arr1 = [1,2,3];
$arr2 = [1,2,3];

$node = new TreeNode(1);
$root1 = $node;

$node = new TreeNode(2);
$root1->left = $node;

$node = new TreeNode(3);
$root1->right = $node;

$node = new TreeNode(1);
$root2 = $node;

$node = new TreeNode(2);
$root2->left = $node;

$node = new TreeNode(3);
$root2->right = $node;

$obj = new Solution();
var_dump($obj->isSameTree($root1, $root2));
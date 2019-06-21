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
     * @return Boolean
     */
    function isSymmetric($root)
    {
        if (empty($root)) return true;

        return $this->isSymmetricTree($root->left, $root->right);
    }

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSymmetricTree($p, $q)
    {
        if (null == $p || null == $q) return ($p == $q);
        if ($p->val != $q->val) return false;

        $leftFlag = $this->isSymmetricTree($p->left, $q->right);
        $rightFlag = $this->isSymmetricTree($p->right, $q->left);

        return $leftFlag && $rightFlag;
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
var_dump($obj->isSymmetric($root));
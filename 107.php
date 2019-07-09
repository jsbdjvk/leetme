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
     * @return Integer[][]
     */
    function levelOrderBottom($root) {
        if (null == $root) return [];

        $arr = [];
        $arrLevel = [];

        $queue = [$root];
        $count = count($queue);
        $i = 0;

        while (!empty($queue))
        {
            $node = array_shift($queue);
            $arrLevel[$i++] = $node->val;

            (null != $node->left) && array_push($queue, $node->left);
            (null != $node->right) && array_push($queue, $node->right);

            if ($i == $count)
            {
                $arr[] = $arrLevel;
                $arrLevel = [];
                $i = 0;
                $count = count($queue);
            }
        }

        return array_reverse($arr);
    }
}
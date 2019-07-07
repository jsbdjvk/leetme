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
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums)
    {
        if (empty($nums)) return null;

        // 每次选取中间数作为本次节点
        $mid = intval(floor(count($nums) / 2));

        $node = new TreeNode($nums[$mid]);

        $arrLeft = array_slice($nums, 0, $mid);
        $arrRight = array_slice($nums, $mid + 1);

        if (!empty($arrLeft)) {
            $node->left = $this->sortedArrayToBST($arrLeft);
        }
        if (!empty($arrRight)) {
            $node->right = $this->sortedArrayToBST($arrRight);
        }

        return $node;
    }
}
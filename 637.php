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
     * @return Float[]
     *
     * 层序遍历变种玩法
     */
    function averageOfLevels($root)
    {
        if (null == $root) return [];

        $arr = [];
        $sum = 0;

        $queue = [$root];
        $count = 1;
        $i = 0;

        while (!empty($queue))
        {
            $node = array_shift($queue);
            $node->left && array_push($queue, $node->left);
            $node->right && array_push($queue, $node->right);
            $sum += $node->val;
            ++$i;

            if ($i == $count)
            {
                array_push($arr, $sum / $i);
                $count = count($queue);
                $sum = 0;
                $i = 0;
            }
        }

        return $arr;
    }
}
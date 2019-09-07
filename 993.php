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
     * @param Integer $x
     * @param Integer $y
     * @return Boolean
     */
    function isCousins($root, $x, $y)
    {
        $queue = [$root];

        $i = 0;

        while (!empty($queue))
        {
            $map = [];

            $size = count($queue);

            for (; $i < $size; ++$i)
            {
                if (null != $queue[$i]->left)
                {
                    $map[$queue[$i]->val][] = $queue[$i]->left->val;
                    array_push($queue, $queue[$i]->left);
                }
                if (null != $queue[$i]->right)
                {
                    $map[$queue[$i]->val][] = $queue[$i]->right->val;
                    array_push($queue, $queue[$i]->right);
                }
            }

            $counter = 0;

            foreach ($map as $item)
            {
                if (in_array($x, $item) || in_array($y, $item))
                {
                    ++$counter;
                }
            }

            if (2 == $counter)
            {
                return true;
            } else if (1 == $counter)
            {
                return false;
            }
        }

        return false;
    }
}
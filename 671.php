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
     * @return Integer
     */
    function findSecondMinimumValue($root)
    {
        if (null == $root)
        {
            return -1;
        }

        $queue = [$root];
        $size = 1;
        $i = 0;
        $min = $root->val;

        while ($i < $size)
        {
            $arr = [];
            for (; $i < $size; ++$i)
            {
                $node = $queue[$i];

                array_push($arr, $node->val);

                if (null != $node->left)
                {
                    array_push($queue, $node->left);
                    ++$size;
                }
                if (null != $node->right)
                {
                    array_push($queue, $node->right);
                    ++$size;
                }
            }

            sort($arr);

            foreach ($arr as $val)
            {
                if ($val > $min)
                {
                    return $val;
                }
            }
        }

        return -1;
    }
}
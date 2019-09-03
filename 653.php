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
     * @param Integer $k
     * @return Boolean
     */
    function findTarget($root, $k)
    {
        $midLoop = $this->getMidLoop($root);

        $count = count($midLoop);

        for ($i = 0, $j = $count - 1; $i < $j;)
        {
            if ($midLoop[$i] + $midLoop[$j] > $k)
            {
                --$j;
            } else if ($midLoop[$i] + $midLoop[$j] < $k)
            {
                ++$i;
            } else
            {
                return true;
            }
        }

        return false;
    }

    function getMidLoop($root)
    {
        if (null == $root)
        {
            return [];
        }

        $arr = [$root->val];

        if (null == $root->left && null == $root->right)
        {
            return $arr;
        } else if (null == $root->left)
        {
            return array_merge($arr, $this->getMidLoop($root->right));
        } else if (null == $root->right)
        {
            return array_merge($this->getMidLoop($root->left), $arr);
        } else
        {
            return array_merge($this->getMidLoop($root->left), $arr, $this->getMidLoop($root->right));
        }
    }
}
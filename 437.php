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
     * @param Integer $sum
     * @return Integer
     */
    function pathSum($root, $sum)
    {
        $arrBuff = [];
        $counter = 0;

        $this->pathSumEx($root, $sum, $arrBuff, $counter);

        return $counter;
    }

    function pathSumEx($root, &$sum, $arrBuff = [], &$counter = 0)
    {
        if (null == $root)
        {
            return;
        }

        if ($root->val == $sum)
        {
            ++$counter;
        }

        foreach ($arrBuff as $key => $val)
        {
            $arrBuff[$key] += $root->val;
            if ($arrBuff[$key] == $sum)
            {
                ++$counter;
            }
        }
        array_push($arrBuff, $root->val);

        if (null == $root->left && null == $root->right)
        {
            return;
        } else if (null == $root->left)
        {
            $this->pathSumEx($root->right, $sum, $arrBuff, $counter);
        } else if (null == $root->right)
        {
            $this->pathSumEx($root->left, $sum, $arrBuff, $counter);
        } else
        {
            $this->pathSumEx($root->left, $sum, $arrBuff, $counter);
            $this->pathSumEx($root->right, $sum, $arrBuff, $counter);
        }
    }
}
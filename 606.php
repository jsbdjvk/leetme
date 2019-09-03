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
     * @param TreeNode $t
     * @return String
     */
    function tree2str($t)
    {
        if (null == $t)
        {
            return '';
        }

        $str = $this->tree2strEx($t);

        $len = strlen($str);

        return substr($str, 1, $len - 2);
    }

    function tree2strEx($t)
    {
        if (null == $t)
        {
            return '';
        }

        $str = '(' . $t->val;

        if (null == $t->left && null == $t->right)
        {
            $str .= ')';
        } else if (null == $t->left)
        {
            $str .= '()' . $this->tree2strEx($t->right) . ')';
        } else if (null == $t->right)
        {
            $str .= $this->tree2strEx($t->left) . ')';
        } else
        {
            $str .= $this->tree2strEx($t->left) . $this->tree2strEx($t->right) . ')';
        }

        return $str;
    }
}
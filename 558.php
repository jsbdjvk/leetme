<?php

// Definition for a QuadTree node.
class Node {
    public $val;
    public $isLeaf;
    public $topLeft;
    public $topRight;
    public $bottomLeft;
    public $bottomRight;

    //@param Boolean $val
    //@param Boolean $isLeaf
    //@param Node $topLeft
    //@param Node $topRight
    //@param Node $bottomLeft
    //@param Node $bottomRight
    function __construct($val, $isLeaf, $topLeft, $topRight, $bottomLeft, $bottomRight) {
        $this->val = $val;
        $this->isLeaf = $isLeaf;
        $this->topLeft = $topLeft;
        $this->topRight = $topRight;
        $this->bottomLeft = $bottomLeft;
        $this->bottomRight = $bottomRight;
    }
}

class Solution {

    /**
     * @param Node $quadTree1
     * @param Node $quadTree2
     * @return Node
     */
    function intersect($quadTree1, $quadTree2)
    {
        if (null == $quadTree1)
        {
            return $quadTree2;
        }

        if (null == $quadTree2)
        {
            return $quadTree1;
        }

        if ($quadTree1->isLeaf)
        {
            if ($quadTree1->val)
            {
                return $quadTree1;
            } else
            {
                return $quadTree2;
            }
        }

        if ($quadTree2->isLeaf)
        {
            if ($quadTree2->val)
            {
                return $quadTree2;
            } else
            {
                return $quadTree1;
            }
        }

        $topLeft = $this->intersect($quadTree1->topLeft, $quadTree2->topLeft);
        $topRight = $this->intersect($quadTree1->topRight, $quadTree2->topRight);
        $bottomLeft = $this->intersect($quadTree1->bottomLeft, $quadTree2->bottomLeft);
        $bottomRight = $this->intersect($quadTree1->bottomRight, $quadTree2->bottomRight);

        if ($topLeft->isLeaf && $topRight->isLeaf && $bottomLeft->isLeaf && $bottomRight->isLeaf
            && $topLeft->val && $topRight->val && $bottomLeft->val && $bottomRight->val)
        {
            return new Node(true, true, null, null, null, null);
        }

        return new Node(false, false, $topLeft, $topRight, $bottomLeft, $bottomRight);
    }
}
<?php

/*
// Definition for a Node.
class Node {
    public $val;
    public $children;

    @param Integer $val
    @param list<Node> $children
    function __construct($val, $children) {
        $this->val = $val;
        $this->children = $children;
    }
}
*/
class Solution {

    /**
     * @param Node $root
     * @return Integer[][]
     */
    function levelOrder($root)
    {
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

            foreach ($node->children as $child)
            {
                (null != $child) && array_push($queue, $child);
            }

            if ($i == $count)
            {
                $arr[] = $arrLevel;
                $arrLevel = [];
                $i = 0;
                $count = count($queue);
            }
        }

        return $arr;
    }
}
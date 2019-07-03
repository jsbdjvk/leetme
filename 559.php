<?php

/*
// Definition for a Node.
*/
class Node {
    public $val;
    public $children;

    // @param Integer $val
    // @param list<Node> $children
    function __construct($val, $children) {
        $this->val = $val;
        $this->children = $children;
    }
}
class Solution {

    /**
     * @param Node $root
     * @return Integer
     */
    function maxDepth($root) {
        if (null == $root)
        {
            return 0;
        } else
        {
            $arr = []; // 记录所有子节点高度
            foreach ($root->children as $child)
            {
                $arr[] = $this->maxDepth($child);
            }
            return max($arr) + 1;
        }
    }
}


$node1 = new Node(5, []);
$node2 = new Node(6, []);
$node3 = new Node(3, [$node1, $node2]);
$node4 = new Node(2, []);
$node5 = new Node(4, []);
$root = new Node(1, [$node3, $node4, $node5]);

$obj = new Solution();
var_dump($obj->maxDepth($root));
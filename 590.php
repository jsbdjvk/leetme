<?php

// Definition for a Node.
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

    private  $arrPre = [];

    /**
     * @param Node $root
     * @return Integer[]
     */
    function postorder($root)
    {
        if (null == $root) return [];

        $arr = [];

        foreach ($root->children as $child)
        {
            $arr = array_merge($arr, $this->postorder($child));
        }

        $arr[] = $root->val;

        return $arr;
    }

    /**
     * @param Node $root
     * @return Integer[]
     */
    function preorder($root)
    {
        $this->pre($root);

        return $this->arrPre;
    }

    function pre($root)
    {
        if (null == $root) return;

        $this->arrPre[] = $root->val;

        foreach ($root->children as $child)
        {
            $this->pre($child);
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
var_dump($obj->postorder($root));
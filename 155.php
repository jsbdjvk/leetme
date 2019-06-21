<?php

class MinStack {
    /**
     * initialize your data structure here.
     */
    function __construct() {
        $this->stack = [];
        $this->min = null;
    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->min = (null !== $this->min) ? ($this->min < $x ? $this->min : $x) : $x;
        array_push($this->stack, [$x, $this->min]);
    }

    /**
     * @return NULL
     */
    function pop() {
        array_pop($this->stack);
        empty($this->stack) && $this->min = null;
    }

    /**
     * @return Integer
     */
    function top() {
        return @$this->stack[count($this->stack) - 1][0];
    }

    /**
     * @return Integer
     */
    function getMin() {
        return @$this->stack[count($this->stack) - 1][1];
    }
}

/**
 * Your MinStack object will be instantiated and called as such:
 * $obj = MinStack();
 * $obj->push($x);
 * $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->getMin();
 */
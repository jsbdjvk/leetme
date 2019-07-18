<?php

class MyStack {
    /**
     * Initialize your data structure here.
     */
    function __construct() {
        $this->queue = [];
        $this->top = null;
    }

    /**
     * Push element x onto stack.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->top = $x;
        array_push($this->queue, $x);
        return null;
    }

    /**
     * Removes the element on top of the stack and returns that element.
     * @return Integer
     */
    function pop() {

        if ($this->empty()) return null;

        $queueTmp = [];
        $queueCp = $this->queue;

        $outTop = null;

        while ($queueCp)
        {
            $outTop = array_shift($queueCp);
            if (!empty($queueCp))
            {
                array_push($queueTmp, $outTop);
            }
        }

        $lastTop = null;

        while ($queueTmp)
        {
            $lastTop = array_shift($queueTmp);
            array_push($queueCp, $lastTop);
        }

        $this->queue = $queueCp;
        $this->top = $lastTop;

        return $outTop;
    }

    /**
     * Get the top element.
     * @return Integer
     */
    function top() {
        return $this->top;
    }

    /**
     * Returns whether the stack is empty.
     * @return Boolean
     */
    function empty() {
        return $this->top ? false : true;
    }
}

/**
 * Your MyStack object will be instantiated and called as such:
 * $obj = MyStack();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->empty();
 */
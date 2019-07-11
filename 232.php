<?php
class MyQueue {
    /**
     * Initialize your data structure here.
     */
    function __construct() {
        $this->stack = [];
        $this->front = null; // 队头的值
    }

    /**
     * Push element x to the back of queue.
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        if (empty($this->stack)) $this->front = $x;
        array_push($this->stack, $x);
    }

    /**
     * Removes the element from in front of queue and returns that element.
     * @return Integer
     */
    function pop() {

        if ($this->empty()) return null;

        $tmpStack = [];

        $stack = $this->stack;

        while (!empty($stack))
        {
            array_push($tmpStack, array_pop($stack));
        }

        $popVal = array_pop($tmpStack);

        $front = array_pop($tmpStack);

        if (!empty($front))
        {
            array_push($stack, $front);

            while (!empty($tmpStack))
            {
                array_push($stack, array_pop($tmpStack));
            }
        } else
        {
            $stack = [];
        }

        $this->front = $front ?: null;
        $this->stack = $stack;

        return $popVal;
    }

    /**
     * Get the front element.
     * @return Integer
     */
    function peek() {
        return $this->front;
    }

    /**
     * Returns whether the queue is empty.
     * @return Boolean
     */
    function empty() {
        return empty(end($this->stack)) ? true : false;
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */
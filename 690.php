<?php

/*
// Employee info
class Employee {
    public $id;
    public $importance;
    public $subordinates;

    @param Integer $id
    @param Integer $importance
    @param Integer[] $subordinates
    function __construct($id, $importance, $subordinates) {
        // unique id of this employee
        $this->id = $id;
        // the importance value of this employee
        $this->importance = $importance;
        // the id of direct subordinates
        $this->subordinates = $subordinates;
    }
}
*/
class Solution {

    /**
     * @param list<Employee> $employees
     * @param Integer $id
     * @return Integer
     *
     *
     * 这题就是BFS或DFS，不知道为什么打印输入$employees是个空，先不管了
     */
    function getImportance($employees, $id)
    {
        $arrId2Employee = [];
        foreach ($employees as $employee)
        {
            $arrId2Employee[$employee->id] = $employee;
        }

        $sumImportance = 0;

        $this->getImportanceEx($arrId2Employee, $id, $sumImportance);

        return $sumImportance;
    }

    function getImportanceEx(&$arrId2Employee, $id, &$sumImportance = 0)
    {
        $sumImportance += $arrId2Employee[$id]->importance;

        if (!empty($arrId2Employee[$id]->subordinates))
        {
            foreach ($arrId2Employee[$id]->subordinates as $subordinate)
            {
                $this->getImportanceEx($arrId2Employee, $subordinate->id, $sumImportance);
            }
        }
    }
}
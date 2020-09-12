<?php


namespace OOPLearn\Patterns\FormingObjects\Task1;


class NastyBoss
{
    private $employees = [];

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function projectFails()
    {
        if (count($this->employees))
        {
            $emp = array_pop($this->employees);
            $emp->fire();
        }
    }
}
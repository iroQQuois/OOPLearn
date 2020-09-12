<?php


namespace OOPLearn\Patterns\FormingObjects\Task1;


class CluedUp extends Employee
{
    public function fire()
    {
        echo "{$this->name}: я вызову адвоката\n";
    }
}
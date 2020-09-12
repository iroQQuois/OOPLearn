<?php


namespace OOPLearn\Patterns\FormingObjects\Task1;


class WellConnected extends Employee
{
    public function fire()
    {
        echo "{$this->name}: я позвоню папе\n";
    }
}
<?php


namespace OOPLearn\Patterns\FormingObjects\Task1;


class Minion extends Employee
{
    public function fire()
    {
        echo "{$this->name}: я уберу со стола\n";
    }
}
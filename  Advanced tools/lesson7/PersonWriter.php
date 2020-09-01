<?php


class PersonWriter
{
    public function writeName(Person $p)
    {
        echo $p->getName() . "\n";
    }

    public function writeAge(Person $p)
    {
        echo $p->getAge() . "\n";
    }
}
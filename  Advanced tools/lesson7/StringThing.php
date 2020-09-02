<?php


class ToStringExamplePerson
{
    function getName(): string
    {
        return "Иван";
    }

    function getAge(): int
    {
        return 44;
    }

    function __toString(): string
    {
        // срабатывает, когда вызываются функции типо echo, print и тд
        $desc = $this->getName();
        $desc .= " (возраст " . $this->getAge() . " лет)";
        return $desc;
    }
}

$person = new ToStringExamplePerson();
echo $person;
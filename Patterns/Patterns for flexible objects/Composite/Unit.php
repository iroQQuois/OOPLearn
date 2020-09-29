<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects;


abstract class Unit
{
    public function getComposite()
    {
        return null;
    }

    abstract public function bombardStrength(): int;
}


// создать армию
$main_army = new Army();

// ввести пару боевых единиц
$main_army->addUnit(new Archer());
$main_army->addUnit(new LaserCannonUnit());

// создать ещё одну армию
$sub_army = new Army();

// ввести несколько боевых единиц
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());
$sub_army->addUnit(new Archer());

// добавить вторую армию к первой
$main_army->addUnit($sub_army);

// все вычисления выполняются подспудно
echo " Атакующая сила: {$main_army->bombardStrength()}";
<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects;


class TroopCarrier extends CompositeUnit
{
    public function addUnit(Unit $unit)
    {
        if ($unit instanceof Cavalry)
        {
            throw new UnitException(
                "Нельзя перемещать лошать на бронетранспортере."
            );
        }
        parent::addUnit($unit);
    }

    public function bombardStrength(): int
    {
        return 0;
    }
}
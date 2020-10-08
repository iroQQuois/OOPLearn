<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects\Decorator\Example1;


class DiamondPlains extends Plains
{
    public function getWealthFactor(): int
    {
        return parent::getWealthFactor() + 2;
    }
}
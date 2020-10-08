<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects\Decorator\Example1;


class DiamondDecorator extends TileDecorator
{
    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() + 2;
    }
}



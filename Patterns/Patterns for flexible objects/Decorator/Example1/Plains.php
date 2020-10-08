<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects\Decorator\Example1;


class Plains extends Tile
{
    private $wealthfactor = 2;


    public function getWealthFactor(): int
    {
        return $this->wealthfactor;
    }
}
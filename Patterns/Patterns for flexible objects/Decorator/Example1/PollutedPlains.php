<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects\Decorator\Example1;


class PollutedPlains extends Plains
{
    public function getWealthFactor(): int
    {
        return parent::getWealthFactor() -4; //
    }
}
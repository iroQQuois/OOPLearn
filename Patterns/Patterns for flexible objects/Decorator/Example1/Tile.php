<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects\Decorator\Example1;


abstract class Tile
{
    abstract public function getWealthFactor(): int;
}


$tile = new Plains();
echo $tile->getWealthFactor();

$tile = new DiamondDecorator(new Plains());
echo $tile->getWealthFactor();

$tile = new PollutionDecorator(new DiamondDecorator(new Plains()));

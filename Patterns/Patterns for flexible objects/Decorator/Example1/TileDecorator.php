<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects\Decorator\Example1;


abstract class TileDecorator extends Tile
{
    protected $tile;


    public function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}
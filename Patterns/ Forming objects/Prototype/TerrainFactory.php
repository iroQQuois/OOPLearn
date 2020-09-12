<?php


namespace OOPLearn\Patterns\FormingObjects\Prototype;


include "Sea.php";
include "EarthSea.php";
include "Plains.php";
include 'EarthPlains.php';
include 'Forest.php';
include 'EarthForest.php';


class TerrainFactory
{
    private $sea;
    private $forest;
    private $plains;

    public function __construct(Sea $sea, Plains $plains, Forest $forest)
    {
        $this->sea = $sea;
        $this->plains = $plains;
        $this->forest = $forest;
    }

    public function getSea(): Sea
    {
        return clone $this->sea;
    }

    public function getPlains(): Plains
    {
        return clone $this->plains;
    }

    public function getForest(): Forest
    {
        return clone $this->forest;
    }
}


$factory = new TerrainFactory(
    new EarthSea(-1),
    new EarthPlains(),
    new EarthForest()
);

var_dump($factory->getSea());
var_dump($factory->getPlains());
var_dump($factory->getForest());
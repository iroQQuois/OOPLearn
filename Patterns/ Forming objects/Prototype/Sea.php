<?php


namespace OOPLearn\Patterns\FormingObjects\Prototype;


class Sea
{
    private $navigability = 0;

    public function __construct(int $navigability)
    {
        $this->navigability = $navigability;
    }
}
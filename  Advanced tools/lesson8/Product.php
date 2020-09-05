<?php

namespace OOPLearn\AdvancedTools\Lesson8;

class Product
{
    public string $name;
    public float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}
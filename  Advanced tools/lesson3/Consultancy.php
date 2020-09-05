<?php

namespace OOPLearn\AdvancedTools\Lesson3;

// класс может быть дочерним и при этом имплементировать интерфейсы
class Consultancy extends TimedService implements Bookable, Chargeable
{
    public function getPrice(): int
    {
        // TODO: Implement getPrice() method.
    }
}
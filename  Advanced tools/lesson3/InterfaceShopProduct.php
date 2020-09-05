<?php

namespace OOPLearn\AdvancedTools\Lesson3;

use OOPLearn\Objects\CdProduct;

class InterfaceShopProduct implements Chargeable
{
    protected $price;

    // класс, который имплементирует интерфейс, должен
    // реализовывать методы, обьявленные в интерфейсе
    public function getPrice(): int
    {
        return $this->price;
    }

    public function CDInfo(CdProduct $prod)
    {
        //
    }
}
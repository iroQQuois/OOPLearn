<?php


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
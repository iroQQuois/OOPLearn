<?php

// пример абстрактного класса
// нельзя создать объект абстрактного класса

abstract class ShopProductWriter
{
    protected $products = [];

    public function addProduct(ShopProduct $shopProduct)
    {
        $this->products = $shopProduct;
    }

    // абстрактная функция - обьявленная, но не реализованная функция
    abstract public function write();
}
<?php

namespace OOPLearn\AdvancedTools\Lesson4;

// пример трейта
trait PriceUtilities
{
    private int $taxRate = 17;

    // метод с формулой, которая повторяется у нас в Service
    // и ShopProduct
    public function calculateTax(int $price): int
    {
        return (($this->taxRate / 100) * $price);
    }
}
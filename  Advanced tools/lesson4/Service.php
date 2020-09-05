<?php

namespace OOPLearn\AdvancedTools\Lesson4;

include 'PriceUtilities.php';

abstract class Service
{
    // базовый класс для службы
    // используем трейт, чтобы метод в нём унаследовался в дочернем классе
    use PriceUtilities;
}

class UtilityService extends Service
{
    /*
    private int $taxRate = 17;

    function calculateTax(int $price): int
    {
        return (($this->taxRate / 100) * $price);
    }
    */
}

$u = new UtilityService();
echo $u->calculateTax(100) . "\n";
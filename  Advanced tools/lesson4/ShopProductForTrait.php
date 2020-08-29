<?php

include 'PriceUtilities.php';
include 'IdentityTrait.php';
include 'IdentityObject.php';

class ShopProductForTrait implements IdentityObject
{
    /*
    private int $taxRate = 17;

    public function calculateTax(int $price): int
    {
        return (($this->taxRate / 100) * $price);
    }
    */
    // вместо этого можно воспользовать трейтом

    // мы можем использовать несколько трейтов
    use PriceUtilities, IdentityTrait;

    public static function storeIdentityObject(
                            IdentityObject $idobj)
    {
        // сделать что-нибудь с экземпляром типа IdentityObject
    }
}

$p = new ShopProductForTrait();
ShopProductForTrait::storeIdentityObject($p);
echo $p->calculateTax(100) . "\n";
echo "<br />";
echo $p->generateId() . "<br />\n";
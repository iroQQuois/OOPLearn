<?php

include 'ProcessSale.php';
include 'ExampleProduct.php';

class Totalizer
{
    public static function warnAmount()
    {
        // способ возвращения анонимной функции
        return function (ExampleProduct $product)
        {
            if ($product->price > 5)
            {
                echo " покупается дорогой товар: {$product->price}\n";
            }
        };
    }
}

$processor = new ProcessSale();
$processor->registerCallback(Totalizer::warnAmount());
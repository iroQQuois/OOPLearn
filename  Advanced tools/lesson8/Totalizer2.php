<?php

include_once 'ExampleProduct.php';
include_once 'ProcessSale.php';

class Totalizer2
{
    public static function warnAmount($amt)
    {
        $count = 0;

        return function ($product) use ($amt, &$count)
        {
            $count += $product->price;
            echo " сумма: $count\n";
            if ($count > $amt)
            {
                echo "\n Продано товаров на сумму: {$count}\n";
            }
        };
    }
}

$processor = new ProcessSale();
$processor->registerCallback(Totalizer2::warnAmount(8));

$processor->sale(new ExampleProduct("Туфли", 6));
echo "\n";
$processor->sale(new ExampleProduct("Кофе", 6));
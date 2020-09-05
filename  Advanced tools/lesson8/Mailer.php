<?php

include 'ExampleProduct.php';
include 'ProcessSale.php';

class Mailer
{
    public function doMail(ExampleProduct $product)
    {
        echo " Отправляется ({$product->name})\n";
    }
}

$processor = new ProcessSale();
$processor->registerCallback([new Mailer(), "doMail"]);

$processor->sale(new ExampleProduct("Туфли", 6));
echo "\n";
$processor->sale(new ExampleProduct("Кофе", 6));
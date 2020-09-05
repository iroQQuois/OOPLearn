<?php

namespace OOPLearn\AdvancedTools\Lesson2;

use OOPLearn\AdvancedTools\Lesson2\ShopProductWriter;

class TextProductWriter extends ShopProductWriter
{
    // реализация абстрактного метода, которая будет возвращать сведения в string
    public function write()
    {
        $str = "Товары:\n";
        foreach ($this->products as $shopProduct)
        {
            $str .= $shopProduct->getSummaryLine() . "\n";
        }
        echo $str;
    }
}
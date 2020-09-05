<?php

namespace OOPLearn\AdvancedTools\Lesson2;

use OOPLearn\AdvancedTools\Lesson2\ShopProductWriter;

class XmlProductWriter extends ShopProductWriter
{
    // реализация абстрактного метода, которая будет выводить информацию в XML формате
    public function write()
    {
        $writer = new \XMLWriter();
        $writer->openMemory();
        $writer->startDocument('1.0', 'UTF-8');
        $writer->startElement('products');
        foreach ($this->products as $shopProduct)
        {
            $writer->startElement('product');
            $writer->writeAttribute('title', $shopProduct->getTitle());
            $writer->startElement('summary');
            $writer->text($shopProduct->getSummaryLine());
            $writer->endElement(); // 'summary'
            $writer->endElement(); // 'product'
        }
        $writer->endElement(); // 'products'
        $writer->endDocument();
        echo $writer->flush();
    }
}
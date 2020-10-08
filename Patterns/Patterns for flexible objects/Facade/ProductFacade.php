<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects\Facade;


use OOPLearn\AdvancedTools\Lesson8\Product;

class ProductFacade
{
    private $products = [];


    public function __construct(string $file)
    {
        $this->file = $file;
        $this->compile();
    }

    private function compile()
    {
        $lines = getProductFileLines($this->file);
        foreach ($lines as $line)
        {
            $id = getIdFromLine($line);
            $name = getNameFromLine($line);
            $this->products[$id] = getProductObjectFromID($id, $name);
        }
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function getProduct(string $id): \Product
    {
        if (isset($this->products[$id]))
        {
            return $this->products[id];
        }
        return null;
    }
}


$facade = new ProductFacade(Product::class); // example
$object = $facade->getProduct("234");
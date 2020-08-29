<?php


class ShopProduct
{
    public string $title;
    public string $producerMainName;
    public string $producerFirstName;
    public int $price = 0;

    /*
     * метод-конструктор позволяет устанавливать определённые значение
     * свойств
     */
    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->price = $price;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
    }

    public function getProducer(): string
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }
}

$product1 = new ShopProduct(
    "Лабиринт отражений",
    "Сергей",
    "Лукьяненко",
    100
);

echo "Автор: {$product1->getProducer()}\n";
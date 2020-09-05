<?php

namespace OOPLearn\Objects;

class ShopProduct
{
    private string $title;
    private string $producerMainName;
    private string $producerFirstName;
    protected int $price = 0;
    private int $discount = 0;

    /*
     * метод-конструктор позволяет устанавливать определённые значение
     * свойств
     */
    public function __construct(
        $title,
        $firstName,
        $mainName,
        $price
    )
    {
        $this->title = $title;
        $this->price = $price;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
    }



    // геттеры и сеттер к инкапсулированным свойствам
    public function getProducerFirstName(): string
    {
        return $this->producerFirstName;
    }

    public function getProducerMainName(): string
    {
        return $this->producerMainName;
    }

    public function setDiscount($num): int
    {
        // сеттер скидки
        $this->discount = $num;
    }

    public function getDiscount(): int
    {
        return $this->discount;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): int
    {
        return $this->price - $this->discount;
    }


    public function getProducer(): string
    {
        return $this->producerFirstName . " "
            . $this->producerMainName;
    }

    public function getSummaryLine(): string
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
}

$product1 = new ShopProduct(
    "Лабиринт отражений",
    "Сергей",
    "Лукьяненко",
    100
);

echo "Автор: {$product1->getProducer()}\n";


/*
 * -------------------------
 * Наследование
 * -------------------------
 */


class CdProduct extends ShopProduct
{
    private int $playLength;

    public function __construct($title, $firstName, $mainName, $price, $playLength)
    {
        // вызов конструкции из родительского класса
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength(): int
    {
        // выводит длину трека
        return $this->playLength;
    }

    public function getSummaryLine(): string
    {
        // выводим данные о имени и фамилии автора и времени звучания трека
        $base = "{$this->getTitle()} ( {$this->getProducerMainName()}, ";
        $base .= "{$this->getProducerFirstName()} )";
        $base .= ": Время звучания - {$this->playLength}";
        return $base;
    }
}


class BookProduct extends ShopProduct
{
    private int $numPages;

    public function __construct($title, $firstName, $mainName, $price, $numPages)
    {
        // вызов конструкции из родительского класса
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    public function getNumberOfPages(): int
    {
        return $this->numPages;
    }

    public function getSummaryLine(): string
    {
        // вызываем родительский метод и добавляем к нему данные, которые нам нужны
        // в данном методе класса
        $base = parent::getSummaryLine();
        $base .= ": {$this->numPages} стр.";
        return $base;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
}

$product2 = new CdProduct(
    "Блатной шансон 90х. Лучшее",
    "Михаил",
    "Круг",
    100,
    0,
);

echo "Испольнитель: {$product2->getProducer()}\n";
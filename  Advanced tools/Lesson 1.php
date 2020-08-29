<?php

class ProductModel
{
    private int $id = 0;

    public function setID(int $id)
    {
        $this->id = $id;
    }

    // небольшая реализация фабрики
    public static function getInstance(int $id, \PDO $pdo): ProductModel
    {
        $stmt = $pdo->prepare(
            "SELECT * FROM products where id=?");
        $result = $stmt->execute([$id]);
        $row = $stmt->fetch();

        if (empty($row))
        {
            return null;
        }

        // если перебирается нужная строка, то её данные передаются
        // в объект класса
        if ($row['type'] == 'book')
        {
            $product = new BookProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                (int) $row['price'],
                (int) $row['numpages']
            );
        } elseif ($row['type'] == 'cd') {
            $product = new CdProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                (int) $row['price'],
                (int) $row['playlength']
            );
        } else {
            $firstName = (is_null($row['firstname']))
                        ? "" : $row['firstname'];
            $product = new ShopProduct(
                $row['title'],
                $firstName,
                $row['mainname'],
                (int) $row['price'],
            );
        }
        $product->setId((int) $row['id']);
        $product->setDiscount((int) $row['discount']);
        return $product;
    }
}
<?php


class ProcessSale
{
    private $callbacks;

    public function registerCallback(callable $callback)
    {
        if (!is_callable($callback))
        {
            throw new Exception("Функция обратного вызова - невызываема");
        }
        $this->callbacks[] = $callback;
    }

    public function sale(ExampleProduct $product)
    {
        echo "{$product->name}: обрабатывается...\n";
        foreach ($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}

$logger = function ($product)
{
    echo "Записываем ({$product->name})\r\n<br />";
};


$processor = new ProcessSale();
$processor->registerCallback($logger);

$processor->sale(new ExampleProduct("Туфли", 6));
echo "<br />";
$processor->sale(new ExampleProduct("Кофе", 6));


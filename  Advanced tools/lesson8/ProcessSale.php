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
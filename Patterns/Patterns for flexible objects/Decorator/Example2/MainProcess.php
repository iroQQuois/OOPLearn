<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects\Decorator\Example2;


class MainProcess extends ProcessRequest
{
    public function process(RequestHelper $req)
    {
        echo __CLASS__ . ": выполнение запроса \n";
    }
}
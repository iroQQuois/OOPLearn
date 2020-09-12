<?php


namespace OOPLearn\Patterns\FormingObjects\Prototype;


class Contained
{
    public $contaided;

    function __construct()
    {
        $this->contaided = new Contained();
    }

    function __clone()
    {
        // Обеспечить, чтобы клонированный объект
        // содержал клон объекта, хрянящегося в свойстве self::$contained,
        // а не ссылку на него
        $this->contaided = clone $this->contaided;
    }
}
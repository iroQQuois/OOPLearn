<?php

namespace OOPLearn\ObjectsAndDesign\Lesson1;


abstract class ParamHandler
{
    protected $source;
    protected $params = [];

    public function __construct(string $source)
    {
        $this->source = $source;
    }

    public function addParam(string $key, string $val)
    {
        $this->params[$key] = $val;
    }

    public function getAllParams(): array
    {
        return $this->params;
    }

    public static function getInstance(string $filename): ParamHandler
    {
        if (preg_match("/\.xml$/i", $filename))
        {
            return new XmlParamHandler($filename);
        }
        return new TextParamHandler($filename);
    }

    abstract public function write(): bool;
    abstract public function read(): bool;
}

$test = ParamHandler::getInstance(__DIR__ . "/params.xml");
$test->addParam("key1", "value1");
$test->addParam("key2", "value2");
$test->addParam("key3", "value3");
$test->write(); // записать параметры в формате XML

$test = ParamHandler::getInstance(__DIR__ . "/params.txt");
$test->read(); // прочитать в текстовом формате
$params = $test->getAllParams();
echo $params;
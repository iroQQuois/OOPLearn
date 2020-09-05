<?php


namespace OOPLearn\ObjectsAndDesign\Lesson1;


class XmlParamHandler extends ParamHandler
{

    public function write(): bool
    {
        // записать параметры в формате XML,
        // используя свойство $this->params
    }

    public function read(): bool
    {
        // прочитать параметры в формате XML
        // и заполнить свойство $this->params
    }
}
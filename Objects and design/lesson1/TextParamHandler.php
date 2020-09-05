<?php


namespace OOPLearn\ObjectsAndDesign\Lesson1;


class TextParamHandler extends ParamHandler
{

    public function write(): bool
    {
        // записать текст,
        // используя свойство $this->params
    }

    public function read(): bool
    {
        // прочитать параметры в формате XML
        // и заполнить свойство $this->params
    }
}
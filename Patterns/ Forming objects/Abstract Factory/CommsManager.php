<?php


namespace OOPLearn\Patterns\FormingObjects\AbstractFactory;

// интерфейс для формирования каждого из трёх продуктов

abstract class CommsManager
{
    abstract public function getHeaderText(): string;
    abstract public function getApptEncoder(): ApptEncoder;
    abstract public function getTtdEncoder(): TtdEncoder;
    abstract public function getConctactEncoder(): ContactEncoder;
    abstract public function getFooterText(): string;

}
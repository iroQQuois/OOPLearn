<?php


namespace OOPLearn\Patterns\FormingObjects\Factory;


class MegaApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Данные о встрече закодированы в формате MegaCal " . "<br />";
    }
}
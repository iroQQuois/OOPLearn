<?php


namespace OOPLearn\Patterns\FormingObjects\Factory;


abstract class CommsManager
{
    abstract public function getHeaderText(): string;
    abstract public function getApptEncoder(): ApptEncoder;
    abstract public function getFooterText(): string;
}
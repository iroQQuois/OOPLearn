<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects\Decorator\Example2;


abstract class ProcessRequest
{
    abstract public function process(RequestHelper $req);
}
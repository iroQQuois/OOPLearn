<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects\Decorator\Example2;


class DecorateProcess extends ProcessRequest
{
    protected $processrequest;


    public function __construct(ProcessRequest $pr)
    {
        $this->processrequest = $pr;
    }
}
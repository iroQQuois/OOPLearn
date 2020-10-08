<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects\Decorator\Example2;


class LogRequest extends DecorateProcess
{
    public function process(RequestHelper $req)
    {
        echo __CLASS__ . ": регистрация запроса \n";
        $this->processrequest->process($req);
    }
}
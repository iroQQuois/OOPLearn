<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects\Decorator\Example2;


class AuthenticateRequest extends DecorateProcess
{
    public function process(RequestHelper $req)
    {
        echo __CLASS__ . ": аутентификация запроса \n";
        $this->processrequest->process($req);
    }
}
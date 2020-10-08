<?php


namespace OOPLearn\Patterns\PatternsForFlexibleObjects\Decorator\Example2;


class StructureRequest extends DecorateProcess
{
    public function process(RequestHelper $req)
    {
        echo __CLASS__ . ": Формирование данных запроса \n";
        $this->processrequest->process($req);
    }
}


$process = new AuthenticateRequest(new StructureRequest(new LogRequest( new MainProcess())));
$process->process(new RequestHelper());
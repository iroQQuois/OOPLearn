<?php

namespace OOPLearn\AdvancedTools\Lesson6;

class XmlException extends \Exception
{
    private $error;

    public function __construct(\LibXMLError $error)
    {
        $msg = "[{$shortfile}, строка {$error->line},
                столбец {$error->column}] {$error->message}";
        $this->error = $error;
        parent::__construct($msg, $error->code);
    }

    public function getLibXmlError()
    {
        return $this->error;
    }
}

class FileException extends \Exception
{
}

class ConfException extends \Exception
{
}
<?php


namespace OOPLearn\Patterns\FormingObjects\Factory;


include 'BloggsCommsManager.php';


abstract class ApptEncoder
{
    abstract public function encode(): string;
}


$mgr = new BloggsCommsManager();
echo $mgr->getHeaderText();
echo $mgr->getApptEncoder()->encode();
echo $mgr->getFooterText();
<?php


namespace OOPLearn\Patterns\FormingObjects\ServiceLocator;


use OOPLearn\Patterns\FormingObjects\AbstractFactory\BloggsCommsManager;
use OOPLearn\Patterns\FormingObjects\AbstractFactory\CommsManager;

class AppConfig
{
    private static $instance;
    private $commsManager;


    private function __construct()
    {
        // будет выполнено только один раз 
        $this->init();
    }


    private function init()
    {
        switch (Settings::$COMMSTYPE)
        {
            case 'Mega':
                $this->commsManager = new MegaCommsManage();
            break;
            default:
                $this->commsManager = new BloggsCommsManager();
        }
    }


    public static function getInstance(): AppConfig
    {
        if (empty(self::$instance))
        {
            self::$instance = new self();
        }
        return self::$instance;
    }


    public function getCommsManager(): CommsManager
    {
        return $this->commsManager;
    }
}


$commsMgr = AppConfig::getInstance()->getCommsManager();
echo $commsMgr->getApptEncoder()->encode();
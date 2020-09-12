<?php


namespace OOPLearn\PrinciplesOfPatterns\Connectedness;


use OOPLearn\PrinciplesOfPatterns\CompositionAndExtend\Lecture;
use OOPLearn\PrinciplesOfPatterns\CompositionAndExtend\Seminar;


abstract class Notifier
{
    public static function getNotifier(): Notifier
    {
        // получить конкретный класс в соответствии с
        // конфигурацией или другой логикой
        if (rand(1, 2) === 1)
        {
            return new MailNotifier();
        } else {
            return new TextNotifier();
        }
    }

abstract public function inform($message);
}

$lesson1 = new Seminar(4, new \OOPLearn\PrinciplesOfPatterns\CompositionAndExtend\TimedCostStrategy());
$lesson2 = new Lecture(4, new \OOPLearn\PrinciplesOfPatterns\CompositionAndExtend\FixedCostStrategy());

$mgr = new RegistrationMgr();
$mgr->register($lesson1);
$mgr->register($lesson2);
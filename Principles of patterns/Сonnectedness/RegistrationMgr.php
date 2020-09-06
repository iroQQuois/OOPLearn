<?php


namespace OOPLearn\PrinciplesOfPatterns\Connectedness;


use OOPLearn\PrinciplesOfPatterns\CompositionAndExtend\Lesson;


class RegistrationMgr
{
    public function register(Lesson $lesson)
    {
        // делам что нибудь с классом Lesson

        // а теперь отправим кому-нибудь сообщения
        $notifier = Notifier::getNotifier();
        $notifier->inform("Новое занятие: стоимость - ({$lesson->cost()})");
    }
}
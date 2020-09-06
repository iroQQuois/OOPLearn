<?php


namespace OOPLearn\PrinciplesOfPatterns\Connectedness;


class MailNotifier extends Notifier
{
    // вывод информации в мыловском формате
    public function inform($message)
    {
        echo "Уведомление по электронной почте: {$message}\n";
    }
}
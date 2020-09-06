<?php


namespace OOPLearn\PrinciplesOfPatterns\Connectedness;


class TextNotifier extends Notifier
{
    // вывод информации в текстовом уведомлении
    public function inform($message)
    {
        echo "Текстовое уведомление: {$message}\n";
    }
}
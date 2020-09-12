<?php


namespace OOPLearn\Patterns\FormingObjects\Singleton;


class Preferences
{
    private $props = [];
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        // доступ к экземпляру класса через посредника
        if (empty(self::$instance))
        {
            self::$instance = new Preferences();
        }
        return self::$instance;
    }

    public function setProperty(string $key, string $val)
    {
        $this->props[$key] = $val;
    }

    public function getProperty(string $key): string
    {
        return $this->props[$key];
    }
}

$pref = Preferences::getInstance();
$pref->setProperty("name", "Иван");
unset($pref); // удалить ссылку
$pref2 = Preferences::getInstance();
echo $pref2->getProperty("name") . "\n"; // покажем, что значение не утрачено


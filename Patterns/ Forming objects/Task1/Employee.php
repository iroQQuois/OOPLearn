<?php


namespace OOPLearn\Patterns\FormingObjects\Task1;

include 'NastyBoss.php';
include 'Minion.php';
include 'CluedUp.php';
include 'WellConnected.php';


abstract class Employee
{
    protected $name;
    private static $types = ['Minion', 'CluedUp', 'WellConnected'];


    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function recruit(string $name)
    {
        $num = rand(1, count(self::$types)) - 1;
        $class = __NAMESPACE__ . "\\" . self::$types[$num];
        return new $class($name);
    }

    abstract public function fire();
}

$boss = new NastyBoss();
$boss->addEmployee(Employee::recruit("Игорь"));
$boss->addEmployee(Employee::recruit("Владимир"));
$boss->addEmployee(Employee::recruit("Мария"));
$boss->projectFails();
$boss->projectFails();
$boss->projectFails();
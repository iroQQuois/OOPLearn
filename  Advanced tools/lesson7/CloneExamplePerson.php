<?php

include 'Account.php';

class CloneExamplePerson
{
    protected string $name;
    private int $age;
    private int $id;
    public Account $account;

    public function __construct(string $name, int $age, Account $account)
    {
        $this->name = $name;
        $this->age = $age;
        $this->account = $account;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function __clone()
    {
        // срабатывает, когда выполняется операция clone
        // для объекта типа Person, создавая его поверхостную копию
        $this->id = 0;
    }
}

$person = new CloneExamplePerson("Иван", 44, new Account(200));
$person->setId(343);
$person2 = clone $person;
// $person 2 :
//       name: Иван
//        age: 44
//         id: 0

// добавим $person немного денег
$person->account->balance += 10;

// этот кредит отразится и на $person2
echo $person2->account->balance;
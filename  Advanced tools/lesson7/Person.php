<?php

// методы перехватчики

class Person
{
    protected string $_name;
    private string $_age;
    private int $id;
    private PersonWriter $writer;

    public function __construct(string $_name, int $_age)
    {
        $this->_name= $_name;
        $this->_age = $_age;
    }

    public function __destruct()
    {
        // деструктор вызывается, когда объект (в данном случае типа Peron)
        // удаляется из памяти. Например при вызове функции __unset()
        if (!empty($this->id))
        {
            // сохранить данные из экземпляра класса Person
            echo "Сохранение персональных данных";
        }
    }

    /*
    public function __construct(PersonWriter $writer)
    {
        $this->writer = $writer;
    }
    */

    // Срабатывает, когда вызывается неопределённый метод
    public function __call(string $name, array $arguments)
    {
        if (method_exists($this->writer, $name))
        {
            return $this->writer->method($this);
        }
    }

    // срабатывает, когда происходит попытка присваивания
    // значения неопределённому свойству
    public function __set($name, $value)
    {
        $method = "set{$name}";
        if (method_exists($this, $method))
        {
            return $this->$method($value);
        }
    }

    public function __unset($name)
    {
        $method = "set{$name}";
        if (method_exists($this, $method))
        {
            $this->method(null);
        }
    }

    public function setName($name)
    {
        $this->_name = $name;
        if (!is_null($name))
        {
            $this->_name = mb_strtoupper($this->_name);
        }
    }

    public function setAge($age)
    {
        $this->_age = $age;
    }

    /*
    // срабатывает, когда вызывается неопределенное свойство
    public function __get(string $name)
    {
        $method = "get{$name}";
        if (method_exists($this, $method))
        {
            return $this->$method();
        }
    }

    // аналогично __get()
    public function __isset($name)
    {
        $method = "get{$name}";
        return (method_exists($this, $method));
    }
    */

    public function getName(): string
    {
        return "Иван";
    }

    public function getAge(): int
    {
        return 44;
    }
}

$p = new Person();
echo $p->getName();

$p->name="Иван";
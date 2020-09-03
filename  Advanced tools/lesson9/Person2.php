<?php


class Person2
{
    public function output(PersonWriter2 $writer)
    {
        $writer->write($this);
    }

    public function getName(): string
    {
        return "Иван";
    }

    public function getAge(): int
    {
        return 44;
    }
}

$person = new Person2();
$person->output(
    // анонимный класс
    new class("/tmp/persondump") implements PersonWriter2
    {
        private $path;

        public function __construct()
        {
            $this->path = $path;
        }

        public function write(Person2 $person)
        {
            file_put_contents($this->path,
            $person->getName() . " " . $person->getAge() . "\n");
        }
    }
);



// TODO: сделать неймспейсы для каждого класса уроков, чтобы не придумывать костыли с их именованием
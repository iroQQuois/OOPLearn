<?php


class Address
{
    private $number;
    private $street;

    public function __construct(
        string $maybenumber, string $maybestreet = null
    )
    {
        if (is_null($maybestreet))
        {
            $this->streetaddress = $maybenumber;
        } else {
            $this->number = $maybenumber;
            $this->street = $maybestreet;
        }
    }

    public function __set(string $name, string $value)
    {
        if ($name === "streetaddress")
        {
            if (preg_match("/^(\d+.*?)[\s,]+(.+)$/",
        $value, $matches))
            {
                $this->number = $matches[1];
                $this->street = $matches[2];
            } else {
                throw new \Exception("Ошибка в адресе: '{$value}'");
            }
        }
    }

    public function __get(string $name)
    {
        if ($name === "streetaddress")
        {
            return $this->number . " " . $this->street;
        }
    }
}

$address = new Address('441 Bakers Street');
echo "Адрес: {$address->streetaddress}\n";

$address = new Address("15", "Albert Mews");
echo "Адрес: {$address->streetaddress}\n";

$address->streetaddress = "34, West 24th Avenue";
echo "Адрес: {$address->streetaddress}\n";
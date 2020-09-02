<?php


class Account
{
    public float $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
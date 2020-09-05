<?php

namespace OOPLearn\AdvancedTools\Lesson7;

class Account
{
    public float $balance;

    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }
}
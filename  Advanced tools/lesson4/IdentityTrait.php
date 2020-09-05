<?php

namespace OOPLearn\AdvancedTools\Lesson4;

trait IdentityTrait
{
    public function generateId(): string
    {
        return uniqid();
    }
}
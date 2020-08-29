<?php


trait IdentityTrait
{
    public function generateId(): string
    {
        return uniqid();
    }
}
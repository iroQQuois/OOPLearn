<?php


namespace OOPLearn\Patterns\FormingObjects\Factory;


include 'CommsManager.php';
include 'BloggsApptEncoder.php';


class BloggsCommsManager extends CommsManager
{

    public function getHeaderText(): string
    {
        return "BloggsCal верхний колонтитул " . "<br />";
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText(): string
    {
        return "BloggsCal нижний колонтитул";
    }
}
<?php


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

    public function getTtdEncoder(): TtdEncoder
    {
        return new BloggsTtdEncoder();
    }

    public function getConctactEncoder(): ContactEncoder
    {
        return new BloggsContactEncoder();
    }

    public function getFooterText(): string
    {
        return "BloggsCal нижний колонтитул " . "<br />";
    }
}
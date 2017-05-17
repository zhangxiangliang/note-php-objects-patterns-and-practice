<?php

abstract class DomainObject
{
    private $group;

    public function __construct()
    {
        $this->group = static::getGroup();
    }

    public static function create()
    {
        return new static();
    }

    public static function getGroup()
    {
        return "default";
    }
}

class User extends DomainObject
{

}

class Document extends DomainObject
{
    public static function getGroup()
    {
        return "document";
    }
}

class SpreadSheet extends Document
{

}

$user = User::create();
$document = Document::create();
$spreadSheet = SpreadSheet::create();

var_dump($user);
var_dump($document);
var_dump($spreadSheet);

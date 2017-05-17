<?php
abstract class DomainObject
{
    public static function create()
    {
        return new static();
    }
}

class User extends DomainObject
{

}

class Document extends DomainObject
{

}

var_dump(Document::create());
var_dump(Document::create());

<?php
class Person
{
    public $nickname = 'xiaoer';

    public function __set($property, $value)
    {
        $property = ucwords($property);
        $method = "set{$property}";
        return method_exists($this, $method) ? $this->$method($value) : null;
    }

    public function setName($value)
    {
        $this->nickname = $value;
    }
}

$person = new Person();
$person->name = 'xiaoze';
print $person->nickname;

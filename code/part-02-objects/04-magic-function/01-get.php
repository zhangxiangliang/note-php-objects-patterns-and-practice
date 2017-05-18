<?php
class Person
{
    public $nickname = "xiaoze";
    public function __get($property)
    {
        $property = ucfirst($property);
        $method = "get{$property}";
        return method_exists($this, $method) ? $this->$method() : null;
    }

    public function getName()
    {
        return $this->nickname;
    }
}

$person = new Person();
print $person->name;

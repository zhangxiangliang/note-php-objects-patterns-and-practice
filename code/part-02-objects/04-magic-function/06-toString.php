<?php

class Person
{
    public function __toString()
    {
        return "Person Object";
    }
}

$person = new Person();

print $person;

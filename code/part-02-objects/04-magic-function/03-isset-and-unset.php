<?php
class Person
{
    public function __isset($property)
    {
        return method_exists($this, $property);
    }

    public function __unset($property)
    {
        $property = ucfirst($property);
        $mothod = "set{$property}";
        if($method_exists($this, $method)) {
            $this->$method(null);
        }
    }
}

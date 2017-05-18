<?php
class PersonWriter
{
    public function writeName(Person $p)
    {
        print $p->getName() . "\n";
    }

    public function writeAge(Person $p)
    {
        print $p->getAge() . "\n";
    }
}

class Person
{
    private $write;

    public function __construct(PersonWriter $writer)
    {
        $this->write = $writer;
    }

    public function __call($method, $args)
    {
        return method_exists($this->write, $method)
            ? $this->write->$method($this) : null;
    }

    public function getName() { return "xiaoze"; }
    public function getAge()  { return 44; }

}

$writer = new PersonWriter();
$person = new Person($writer);
$person->writeName();

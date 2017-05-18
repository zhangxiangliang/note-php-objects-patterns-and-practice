<?php
class Account
{
    public $balance;
    public function __construct($balance)
    {
        $this->balance = $balance;
    }
}

class Person
{
    private $name;
    private $age;
    private $id;
    public $account;

    public function __construct($name, $age, Account $account)
    {
        $this->name = $name;
        $this->age = $age;
        $this->account = $account;
    }

    public function __clone()
    {
        $this->id = 0;
        $this->account = clone $this->account;
    }
}

$person = new Person('xiaoze', '18', new Account(200));
$person2 = clone $person;

$person->account->balance += 10;
print $person->account->balance . "\n";
print $person2->account->balance . "\n";

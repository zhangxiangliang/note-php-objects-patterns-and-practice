<?php

class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price = 0;

    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;
    }

    public function getProducer()
    {
        return "{$this->producerFirstName}" .
            "{$this->producerMainName}";
    }
}

$product = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);
print "author: {$product->getProducer()}\n";

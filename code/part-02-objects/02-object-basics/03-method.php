<?php
class ShopProduct {
    public $title = "default product";
    public $producerMainName = "main name";
    public $producerFirstName = "first name";
    public $price = 0;

    public function getProducer()
    {
        return "{$this->producerFirstName}" .
            " {$this->producerMainName}";
    }
}

$product = new ShopProduct();
$product->title = "My Antonia";
$product->producerMainName = "Cather";
$product->producerFirstName = "Willa";
$product->price = 5.99;

print "author: {$product->getProducer()}";

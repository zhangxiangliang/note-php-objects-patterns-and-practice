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
        return "{$this->producerFirstName} {$this->producerMainName}";
    }
}

class ShopProductWriter
{
    public function write(ShopProduct $shopProduct)
    {
        $str = "{$shopProduct->title}: {$shopProduct->getProducer()} {$shopProduct->price} \n";
        print $str;
    }
}

$product = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);
$writer = new ShopProductWriter();
$writer->write($product);

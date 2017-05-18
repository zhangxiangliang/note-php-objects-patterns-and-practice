<?php
class Totalizer
{
    public static function warnAmount($amt)
    {
        $count = 0;
        return function($product) use ($amt, &$count)
        {
            $count += $product->price;
            $str = $count > $amt ? "reached high price: {$count}\n" : "";
            print "    count: {$count}\n" . $str;
        };
    }
}

class Product
{
    public $name;
    public $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

class ProcessSale
{
    private $callbacks;

    public function registerCallback($callback)
    {
        if(!is_callable($callback)) throw new Expection("callback not callable");
        $this->callbacks[] = $callback;
    }

    public function sale($product)
    {
        print "{$product->name}: processing\n";
        foreach($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}

$processor = new ProcessSale();
$processor->registerCallback(Totalizer::warnAmount(8));
$processor->sale(new Product('shoes', 6));
$processor->sale(new Product('coffee', 7));

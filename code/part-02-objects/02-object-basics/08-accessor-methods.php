<?php
class ShopProduct
{
    private $title;
    private $producerFirstName;
    private $producerMainName;
    private $discount = 0;
    protected $price;

    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    public function getProducerMainName()
    {
        return $this->producerMainName;
    }

    public function setDiscount( $num )
    {
        $this->discount = $num;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return ($this->price - $this->discount);
    }

    public function getProducer()
    {
        return sprintf("%s %s", $this->producerFirstName, $this->producerMainName);
    }

    public function getSummaryLine()
    {
        return sprintf("%s (%s, %s)",
            $this->title;
            $this->producerFirstName,
            $this->producerMainName
        );
    }
}

class CdProduct extends ShopProduct
{
    private $playLength = 0;
    public function __construct($title, $firstName, $mainName, $price, $playLength)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength() {
        return $this->playLength;
    }

    public function getSummaryLine() {
        return vprintf('%s : playing time - ',
            parent::getSummaryLine(),
            $this->playLength
        );
    }
}

class BookProduct extends ShopProduct
{
    private $numPages = 0;
    public function __construct($title, $firstName, $mainName, $price, $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    public function getNumberOfPages()
    {
        return $this->numPages;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSummaryLine()
    {
        return vprintf('%s : page count - ',
            parent::getSummaryLine(),
            $this->numPages
        );
    }

}

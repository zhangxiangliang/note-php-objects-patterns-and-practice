<?php
class ShopProduct
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct($title, $firstName, $mainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
    }

    public function getProducer()
    {
        return $this->producerFirstName . ' ' . $this->producerMainName;
    }

    public function getSummaryLine()
    {
        return $this->title . ' ('
            . $this->producerMainName . ', '
            . $this->producerFirstName . ") ";
    }
}

class CdProduct extends ShopProduct
{
    public $playLength;

    public function __construct($title, $firstName, $mainName, $price, $playLength)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength()
    {
        return $this->playLength;
    }

    public function getSummaryLine()
    {
        printf('%s (%s, %s) : playing time - %s',
            $this->title,
            $this->producerMainName,
            $this->producerFirstName,
            $this->playLength
        );
    }
}

class BookProduct extends ShopProduct
{
    public $numPages;

    public function __construct($title, $firstName, $mainName, $price, $numPages)
    {
        parent::__construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    public function getNumberOfPages()
    {
        return $this->numPages;
    }

    public function getSummaryLine()
    {
        printf('%s (%s, %s) : page count - %s',
            $this->title,
            $this->producerMainName,
            $this->producerFirstName,
            $this->numPages
        );
    }
}

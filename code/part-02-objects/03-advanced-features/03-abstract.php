<?php
abstract class ShopProductWriter
{
    protected $products = [];
    public function addProduct(ShopProduct $product)
    {
        $this->products = $product;
    }
    abstract public function write();
}

class XmlProductWriter extends ShopProductWriter
{
    public function write()
    {
        $baseFormat ='<?xml version="1.0" encoding="UTF-8" ?><products>%s</products>';
        $productFormat = '<product tiltle="%s"><summary>%s</summary></product>';

        $productsFormat = '';
        foreach ($this->products as $product) {
            $productsFormat .= sprintf($productFormat, $product->getTitle(), $product->getSummaryLine());
        }

        return sprintf($bases, $productsFormat);
    }
}

class TextProductWriter extends ShopProductWriter
{
    public function write()
    {
        $baseForamt = "PRODUCTS: \n %s";
        $productsFormat = '';

        foreach ($this->products as $product) {
            $productsFormat .= $product->getSummaryLine() . '\n';
        }

        return sprintf($bases, $productsFormat);
    }
}

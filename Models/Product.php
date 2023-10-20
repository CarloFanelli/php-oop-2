<?php

class Product
{

    public $product_name;

    public $product_price;

    public $product_cat;

    public function __construct($product_name, $product_price, $product_cat)
    {
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_cat = $product_cat;
    }
}

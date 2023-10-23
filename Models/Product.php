<?php

require_once __DIR__ . '/../Trait/Data.php';
class Product
{

    use Data;

    public $product_name;

    public $product_price;

    public $product_cat;

    public $product_img;

    public function __construct($product_name, $product_price, Category $product_cat, $product_img)
    {
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_img = $product_img;
        $this->product_cat = $product_cat;
    }

    public function getPrice($price)
    {
        if (!is_null($price)) {
            return $this->product_price;
        } else {
            throw new Exception('prezzo N.D.');
        }
    }
}

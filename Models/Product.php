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

    public function getIcon()
    {
        if ($this->product_cat === 'Cani' or $this->product_cat === 'cani') {
            return 'Cani' . '<img class="w-25" src="./icons/dog.png" alt="">';
        } elseif ($this->product_cat === 'Gatti' or $this->product_cat === 'gatti') {
            return 'Gatti' . '<img class="w-25" src="./icons/cat.png" alt="">';
        } {
        }
    }
}

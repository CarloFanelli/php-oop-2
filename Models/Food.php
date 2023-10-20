<?php
class Food extends Product
{

    public $weight;

    public function __construct($product_name, $product_price, $product_cat, $weight)
    {
        parent::__construct($product_name, $product_price, $product_cat);
        $this->weight = $weight;
    }

    /*    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    */
    public function getDetails()
    {
        return $this->weight . 'g';
    }
}

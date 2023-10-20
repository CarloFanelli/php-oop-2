<?php
class Toy extends Product
{

    public $material;

    public function __construct($product_name, $product_price, $product_cat, $material)
    {
        parent::__construct($product_name, $product_price, $product_cat);
        $this->material = $material;
    }

    /*    public function setmaterial($material)
    {
        $this->material = $material;
    }

    */
    public function getDetails()
    {
        return $this->material;
    }
}

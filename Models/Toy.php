<?php
class Toy extends Product
{

    public $material;

    public function __construct($product_name, $product_price, Category $product_cat, $product_img, $material)
    {
        parent::__construct($product_name, $product_price, $product_cat, $product_img);
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

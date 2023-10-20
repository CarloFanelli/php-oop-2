<?php
class Kennel extends Product
{

    public $width;
    public $height;
    public $depth;


    public function __construct($product_name, $product_price, $product_cat, $width, $height, $depth)
    {
        parent::__construct($product_name, $product_price, $product_cat);
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }

    /*    public function setdimension($dimension)
    {
        $this->dimension = $dimension;
    }

    */
    public function getDetails()
    {
        return $this->width . 'cm x ' . $this->height . 'cm x ' . $this->depth . ' cm';
    }
}

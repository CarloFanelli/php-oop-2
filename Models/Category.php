<?php
class Category
{
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }

    public function getCat()
    {
        if ($this->category === 'Cani' or $this->category === 'cani') {
            return 'Cani';
        } elseif ($this->category === 'Gatti' or $this->category === 'gatti') {
            return 'Gatti';
        }
    }

    public function getIconCat()
    {
        if ($this->category === 'Cani' or $this->category === 'cani') {
            return "./icons/dog.png";
        } elseif ($this->category === 'Gatti' or $this->category === 'gatti') {
            return "./icons/cat.png";
        }
    }
}

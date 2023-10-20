<?php
class Category
{
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }

    public function getIconCat()
    {
        if ($this->category === 'Cani' or $this->category === 'cani') {
            return 'Cani' . '<img style="width: 30px;" src="./icons/dog.png" alt="">';
        } elseif ($this->category === 'Gatti' or $this->category === 'gatti') {
            return 'Gatti' . '<img style="width: 30px;" src="./icons/cat.png" alt="">';
        }
    }
}

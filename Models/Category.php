<?php
require __DIR__ . '/Product.php';

class Category
{
    public $categoryName;
    public function __construct($categoryName)
    {
        $this->categoryName = $categoryName;
    }
}

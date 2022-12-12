<?php

require_once __DIR__ . '/../Traits/Weightable.php';

class Product
{
    public $name;
    public $price;
    public $imagePath;
    use Weitghtable;
    public function __construct($name, $price, $imagePath, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->imagePath = $imagePath;
        $this->category = $category;
    }
}

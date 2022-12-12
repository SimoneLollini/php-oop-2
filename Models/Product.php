<?php

require_once __DIR__ . '/../Traits/Weightable.php';

class Product
{
    public $name;
    public $price;
    use Weitghtable;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

<?php

class Category
{
    public $categoryName;
    public function __construct($categoryName)
    {
        if ($categoryName == 'cane') {
            $this->$categoryName = 'Cane';
        } else if ($categoryName == 'gatto') {
            $this->$categoryName = 'Gatto';
        } else {
            throw new Exception('Non è ne cane ne gatto!');
        }
    }
}

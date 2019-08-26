<?php

class Category
{
    public $cateNumber;
    public $name;
    public $exist;
    public $loaned;
    public $lost;


    public function __construct($name, $exist, $loaned)
    {
        $this->name = $name;
        $this->exist = $exist;
        $this->loaned = $loaned;
    }
}
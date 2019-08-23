<?php

class Category
{
    public $name;
    public $exist;
    public $loaned;

    public function __construct($name, $exist, $loaned)
    {
        $this->name = $name;
        $this->exist = $exist;
        $this->loaned = $loaned;
    }
}
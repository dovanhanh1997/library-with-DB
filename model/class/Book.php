<?php

class Book
{
    public $bookNumber;
    public $name;
    public $loan;
    public $total;
    public $cateName;

    public function __construct($name, $loan, $total, $cateName)
    {
        $this->name = $name;
        $this->loan = $loan;
        $this->total = $total;
        $this->cateName = $cateName;
    }
}
<?php

class Book
{
    public $bookNumber;
    public $name;
    public $loan;
    public $total;
    public $cateNumber;
    public $cateName;

    public function __construct($name, $loan, $total)
    {
        $this->name = $name;
        $this->loan = $loan;
        $this->total = $total;
    }
}
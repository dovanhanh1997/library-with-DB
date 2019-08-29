<?php
class Order{
    public $orderNumber;
    public $borrowDate;
    public $payBackDate;
    public $amountBook;
    public $studentNumber;

    public function __construct($borrowDate,$payBackDate,$amountBook)
    {
        $this->borrowDate = $borrowDate;
        $this->payBackDate = $payBackDate;
        $this->amountBook = $amountBook;
    }
}
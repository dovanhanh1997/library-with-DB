<?php
include_once 'model/database/DBConnect.php';
include_once 'model/database/DBOrder.php';

class C_Order{
    public $DBOrder;

    public function __construct()
    {
        $connection = new DBConnect();
        $this->DBOrder = new DBOrder($connection->connect());
    }

    public function getList(){
        include 'view/order/list.php';
    }
}
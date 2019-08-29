<?php
include_once 'model/class/Order.php';

class DBOrder
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getList()
    {
        $stmt = "SELECT * FROM borrowOrders;";
        $query = $this->connection->prepare($stmt);
        $query->execute();
        $result = $query->fetchAll();
        $listOrders = [];
        foreach ($result as $row) {
            $listOrder = new Order($row['borrowDate'], $row['payBackDate'], $row['amountBook']);
            $listOrder->studentNumber = $row['studentNumber'];
            $listOrder->orderNumber = $row['orderNumber'];
            $listOrders[] = $listOrder;
        }
        return $listOrders;
    }
}
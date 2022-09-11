<?php
require_once 'Database.php';
class ProductController extends Database
{

    public function getProduct()
    {
        $sql = 'SELECT * FROM products';
        $stmt = $this->connect()->query($sql);
        $row = $stmt->fetchAll();
        echo json_encode($row);
    }
}

$showProducts = new ProductController();
$showProducts->getProduct();

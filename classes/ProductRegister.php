<?php

require_once 'Database.php';

class ProductRegister extends Database
{
    public function addProduct($sku, $name, $price, $type_id, $attribute)
    {

        $sql = 'INSERT INTO products (sku, `name`, price, `type_id`, attribute) VALUES (?, ?, ?, ?, ?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$sku, $name, $price, $type_id, $attribute]);
    }

    public function checkSku($sku){
        $sql = 'SELECT * FROM products WHERE sku = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$sku]);
        $resultCheck = true;
        if($stmt->rowCount() > 0){
            $resultCheck = false;
        }else {
            $resultCheck = true;
        }
        return $resultCheck;
    }
}

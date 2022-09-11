<?php

require_once 'Database.php';

class Types extends Database
{
    public function getTypes()
    {
        $sql = 'SELECT * FROM types';
        $stmt = $this->connect()->query($sql);
        $row = $stmt->fetchAll();
        echo json_encode($row);
    }
}

$types = new Types();
$types->getTypes();

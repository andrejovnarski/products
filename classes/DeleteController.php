<?php

require_once 'Database.php';

class DeleteController extends Database {

    public function deleteProduct($id){
        $sql = 'DELETE FROM products WHERE id = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    } 
}

if(isset($_POST['delete-checkbox'])){
    $delete = $_POST['delete-checkbox'];
    $deleteProducts = new DeleteController();
    foreach($delete as $id){
        $deleteProducts->deleteProduct($id);
    }
    header('location: ../index.php');
    die();
}
header('location: ../index.php');
die();
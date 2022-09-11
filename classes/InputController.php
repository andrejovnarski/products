<?php
require_once 'TypeController.php';

if (isset($_POST['save-btn'])) {
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['productType'];
    if($type == "0"){
        header('location: ../addProduct.php?error=Please select type');
        die();
    }
    require_once 'CheckInputs.php';
    
    $productType = new TypeController();
    $attribute = $productType->checkType(new $type($sku, $name, $price, $type))->setSpecificAttributes();
    $type_id = $productType->checkType(new $type($sku, $name, $price, $type))->setTypeId();
    $product = new CheckInputs($sku, $name, $price, $type_id, $attribute);
    $product->checkProduct();
}

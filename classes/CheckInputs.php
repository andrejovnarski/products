<?php
require_once 'ProductRegister.php';



class CheckInputs extends ProductRegister{

    private $sku;
    private $name;
    private $price;
    private $type_id;
    private $attribute;


    public function __construct($sku, $name, $price, $type_id, $attribute){
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->type_id= $type_id;
        $this->attribute = $attribute;
    }

    public function checkProduct(){
        if ($this->emptyInputs() == false) {
            header('location: ../addProduct.php?error=Please submit required data');
            die();
        }
        if($this->checkingSku() == false){
            header('location: ../addProduct.php?error=SKU must be unique');
            die();
        }

        $product = new ProductRegister();
        $product->addProduct(strtoupper($this->sku), $this->name, $this->price, $this->type_id, $this->attribute);
        header('location: ../index.php');
        die();

    }


    public function checkingSku(){
        $result = true;
        if($this->checkSku($this->sku) == false){
            $result = false;
        }
        return $result;
    }

    public function emptyInputs(){
        $result = true;
        if(empty($this->sku) || empty($this->name) || empty($this->price) || empty($this->type_id) || empty($this->attribute)){
            $result = false; 
        }
        return $result;
    }
}
<?php
require_once 'Product.php';
require_once '../interface.php';


class Book extends Product implements Type
{
    private $weight;

    public function __construct($sku, $name, $price, $type)
    {
        parent::__construct($sku, $name, $price, $type);
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setSpecificAttributes()
    {
        $weight = $_POST['weight'] . 'KG';
        $this->setWeight($weight);
        $attribute = $this->getWeight();
        return $attribute;
    }

    public function setTypeId()
    {
        $type_id = '3';
        return $type_id;
    }
}

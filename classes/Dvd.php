<?php
require_once 'Product.php';
require_once '../interface.php';
class DVD extends Product implements Type
{
    private $size;

    public function __construct($sku, $name, $price, $type)
    {
        parent::__construct($sku, $name, $price, $type);
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSpecificAttributes()
    {
        $size = $_POST['size'] . 'MB';
        $this->setSize($size);
        $attribute = $this->getSize();
        return $attribute;
    }

    public function setTypeId()
    {
        $type_id = '1';
        return $type_id;
    }
}

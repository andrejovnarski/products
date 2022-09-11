<?php
require_once 'Product.php';
require_once '../interface.php';



class Furniture extends Product implements Type
{

    private $height;
    private $width;
    private $length;


    public function __construct($sku, $name, $price, $type)
    {
        parent::__construct($sku, $name, $price, $type);
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setSpecificAttributes()
    {
        $height = $_POST['height'];
        $width = $_POST['width'];
        $length = $_POST['length'];
        $this->setHeight($height);
        $this->setWidth($width);
        $this->setLength($length);
        $attribute = $this->getHeight() . 'x' . $this->getWidth() . 'x' . $this->getLength();
        return $attribute;
    }

    public function setTypeId()
    {
        $type_id = '2';
        return $type_id;
    }
}

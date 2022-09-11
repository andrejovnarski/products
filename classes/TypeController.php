<?php
require_once 'Book.php';
require_once 'Dvd.php';
require_once 'Furniture.php';

class TypeController
{

    public function checkType(Type $type)
    {
        $type->setSpecificAttributes();
        return $type;
    }
}

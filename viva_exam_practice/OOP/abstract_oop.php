<?php

abstract class Car { 
    public $name = "Audi";

    abstract public function carPrice($price,$color,$model);
}

class Bmw  extends Car{ 
    public function carPrice($price,$color,$model)
    {
        return "Price = " . $price . " Color = " . $color . " Model = " .$model;
    }
}

$abs = new Bmw();
echo $abs->carPrice(200,'red','bmw-x');

?>
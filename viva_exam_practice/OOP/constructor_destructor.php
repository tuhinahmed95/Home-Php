<?php

class Car {
    public $name;
    public $model;
    public $price;

    function __construct($cname,$cmodel,$cprice){ 
        $this->name = $cname;
        $this->model = $cmodel;
        $this->price = $cprice;
    }

    function getCar(){ 
        return "CarName : ".$this->name. " CarModel :" . $this->model . " CarPrice : " . $this->price;
    }
   
}

$cardertails = new Car('BMW',"rtt6",345444);

echo "Car_Info = ". $cardertails->getCar();

?>
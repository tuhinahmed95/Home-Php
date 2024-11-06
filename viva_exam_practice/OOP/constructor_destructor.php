<?php

class Car {
    public $name;
    public $model;
    public $price;

    function __construct($cname,$cmodel,$cprice){ 
        $this->name = $cname;
        $this->model = $cmodel;
        $this->price = $cprice;
        echo "inside the constructor";
    }

    function getCar(){ 
        return "CarName : ".$this->name. " CarModel :" . $this->model . " CarPrice : " . $this->price;
    }

    function __destruct()
    {
        echo "inside the destrunctor";
    }
   
}

$cardertails = new Car('BMW',"rtt6",345444);

echo "Car_Info = ". $cardertails->getCar();
echo "<br>";
echo "Object created successfull <br>";

?>
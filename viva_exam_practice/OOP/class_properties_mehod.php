<?php
 class car{ 
    public $name;
    public $model;
    public $price;

    function cardetails($cname,$cmodel,$cprice){ 
        $this->name = $cname;
        $this->model = $cmodel;
        $this->price = $cprice;
        return "Car Name :".$this->name.",Car Model :".$this->model.",CarPrice :".$this->price;
    }
 }

 $carinfo = new car();
 echo $carinfo->cardetails('lambarginit','mtee99',39000000);


?>
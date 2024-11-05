<?php
//  class car{ 
//     public $name;
//     protected $model;
//     public $price;

//     function cardetails($cname,$cmodel,$cprice){ 
//         $this->name = $cname;
//         $this->model = $cmodel;
//         $this->price = $cprice;
//         return "Car Name :".$this->name.",Car Model :".$this->model.",CarPrice :".$this->price;
//     }
//  }

//  $carinfo = new car();
//  echo $carinfo->cardetails('lambarginit','mtee99',39000000);
//  echo "<br>";
//  echo $carinfo->cardetails('Audi','rer55',788888);
//  echo "<br>";
//  echo $carinfo->cardetails('BMW','989rrrr55',345678);
//  echo "<br>";
//  $information = new car();
//  echo $information->cardetails('rangerove','rty66',6788900);

class man { 
    public $name;
    public $age;
    public $address;

    function __construct($fname,$fage,$fadd){ 
        $this->name = $fname;
        $this->age = $fage;
        $this->address = $fadd;
    }

    function __destruct()
    {
        echo $this->name. $this->age;
    }

    function info(){ 
        return "Fname :".$this->name. "Fage :". $this->age. "Address : ".$this->address;
    }
}

$object = new man('Tuhin',30,'Dhaka');
echo $object->info();

?>
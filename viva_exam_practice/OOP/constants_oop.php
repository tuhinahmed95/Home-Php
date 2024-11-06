<?php

class Car { 
    const NUMBER_OF_WHEELS = "This car have 4 wheels";

    public function carsWhells (){ 
        echo self::NUMBER_OF_WHEELS;
    }
}

// echo Car::NUMBER_OF_WHEELS;

$cars = new Car();
echo $cars->carsWhells();

?>
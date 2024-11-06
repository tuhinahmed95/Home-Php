<?php

interface CarInterface { 
    public function startCar();
    public function stopCar();
}

class Bmw implements CarInterface{ 
    public function startCar()
    {
        echo " BMW Start the  Car";
    }
    public function stopCar()
    {
        echo "BMW stop the Car";
    }
}

class Nissan implements CarInterface{ 
    public function startCar()
    {
        echo "Nisan Start the Car";
    }
    public function stopCar()
    {
        echo "Nisan Stop the Car";
    }
}

 function driveCar(CarInterface $car){ 
    $car->startCar();
    $car->stopCar();
}

$bmw = new Bmw();
$nissan = new Nissan();
driveCar($bmw);
echo "<br>";
driveCar($nissan);


?>
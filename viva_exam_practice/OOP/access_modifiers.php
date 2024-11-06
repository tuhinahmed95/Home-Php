<?php

class Man { 
    public $name = "tuhin";
    protected $age = 30;
    private $address = "Dhaka";

    private function accessAll(){ 
        return $this->age.$this->address;
    }

    public function callFunction(){ 
       return $this->accessAll();
    }

    


}

$object = new Man();
echo $object->name;
echo $object->callFunction();



?>
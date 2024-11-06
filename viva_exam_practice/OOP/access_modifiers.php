<?php

class Man { 
    public $name = "tuhin";
    protected $age = 30;
    private $address = "tuhin";

    private function accessAll(){ 
        return $this->age.$this->address;
    }

    public function callFunction(){ 
        $this->accessAll();
    }

    


}

$object = new Man();
echo $object->callFunction();



?>
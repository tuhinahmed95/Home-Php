<?php

class Car { 
    public $name;
    protected $model;
    private $colour;

    public function __construct($name,$model,$colour)
    {
        $this->name = $name;
        $this->model = $model;
        $this->colour = $colour;
    }
    public function powerdBy(){ 
        echo "Diesel";
    }

    public function details (){ 
        echo $this->name.'<br/>';
        echo $this->model . '<br/>';
        echo $this->colour .'<br/>';
    }


}

class tesla  extends Car{ 
    public function powerdBy()
    {
        echo "Elictric";
    }
}

$object = new tesla('BMW','BMW_X','RED');
echo $object->powerdBy();
echo "<br/>";



?>
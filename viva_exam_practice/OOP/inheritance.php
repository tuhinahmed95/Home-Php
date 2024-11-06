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
    public $owner;

    public function __construct($name,$model,$colour,$owner)
    {
        $this->name = $name;
        $this->model = $model;
        // $this->colour = $colour;
        $this->owner = $owner;
    }

  public function powerdBy()
  {
    echo 'Elictric';
  }
}

$object = new tesla('BMW','BMW_X','RED','Tuhin');
echo $object->details();
echo "<br/>";
echo $object->powerdBy();



?>
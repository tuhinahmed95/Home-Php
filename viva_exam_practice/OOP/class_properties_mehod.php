<?php
 class car{ 
    public $name='lambargini';
    public $model = 'mt3o';
    public $price = 499999;

    function cardetails(){ 
        echo "This is a example";
    }
 }

 $carinfo = new car();
 echo $carinfo->name = 'lambargini';
 echo $carinfo->price;


?>
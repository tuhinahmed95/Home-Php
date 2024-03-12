

<?php  

//  use declare parameter for function !!

// declare(strict_types=1);

// function show(int $num1, int $num2){ 
//     $sum = $num1 + $num2;
//     echo "the result is : $sum";

// }

// show(20,30);

// echo "<br>";






//  separator argument use for space !!

function my_details($name,$age,$separator){
    echo $name.$separator.$age; 

}

my_details("tuhin",30,'== ');


echo "<br>";

// static variables use for function !!


function display(){ 
    static $count = 0;
            $count++;
            echo $count."<br>";
}

display();
display();
display();


?>
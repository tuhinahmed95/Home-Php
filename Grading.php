

<form method = "Post">  
   <h1>Result</h1> <input type="number" name = "fname">
    <input type="submit" name = "submit">
</form>

<?php    

$num = $_POST['fname'] 


if($num >=80 && $num<=100){ 
    echo "Your result is A+";
}
elseif($num >=70 && $num <=79){ 
    echo "Your result is A";
}
elseif($num >=60 && $num <=69){ 
    echo "Your resul is A-";
}
elseif($num >=50 && $num <=59){ 
    echo "Your result is B";
}
elseif($num >=40 && $num <=49){ 
    echo "Your result is C";
}
elseif($num >=33 && $num <=39){ 
    echo "Your result is D";
}
else{ 
    echo "Your Result is Fail";
}



?>
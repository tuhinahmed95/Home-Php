

<form method = "POST">  

    <h1>enter your number</h1>
    

    <input type="number" name = "N1">
    <input type="number" name = "N2">
    <input type="number" name = "N3">

    <input type="submit" name "submit">
</form>


<?php  

if(isset($_POST["submit"])){ 
    $num1 = $_POST["N1"];
    $num2 = $_POST["N2"];
    $num3 = $_POST["N3"];


    
if($num1>$num2 && $num1>$num3){ 
    echo ("this is a maximum number = $num1");
}

elseif($num2>$num1 && $num2>$num3){ 
    echo ("this is a maximum number = $num2");
}

else { 
    echo ("this is a maximum number = $num3");
}

    
}


?>
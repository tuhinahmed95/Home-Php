
<form method = 'Post'>  
    <input type="number" name = 'fname'>
    <input type="submit" name = 'submit'>
</form>

<?php         

$number = $_POST['fname'];
$count = 0;

if(isset($_POST['submit'])){  
    if($number == 0 || $number == 1){ 
        echo "Not A Prime Or Composite Number";
    }
    for($i = 2; $i <$number; $i++){ 
        if($number%$i ==0){ 
            $count = 1;
            break;
        }
    }
    if($count ==1){ 
        echo "$number Not A prime Number";
    }
    else{ 
        echo "$number Prime Number";
    }
} 

echo "<br?>";

<form method = "$_post"></form>



?>  
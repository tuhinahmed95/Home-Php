

<?php  
for($outer_list =1; $outer_list <=3; $outer_list++){ 
    echo ("list $outer_list <br>");
    for($inner_list =1; $inner_list<=3; $inner_list ++){ 
        echo (" ----nested list $inner_list <br>");
    }
}


echo "<br><br><br><br>";
//use to break statement !!

for($outer_list =1; $outer_list <=3; $outer_list++){ 
    echo ("list $outer_list <br>");
    for($inner_list =1; $inner_list<=2; $inner_list ++){ 
        echo (" ----nested list $inner_list <br>");
      if($outer_list ==2 && $inner_list ==1){ 
        break 2;
      }
    }
}



echo "<br><br><br><br>";

//  use to goto statement !!


for($outer_list =1; $outer_list <=3; $outer_list++){ 
    echo ("list $outer_list <br>");
    for($inner_list =1; $inner_list<=2; $inner_list ++){ 
        echo (" ----nested list $inner_list <br>");
      if($outer_list ==2 && $inner_list ==1){ 
        goto out;
      }
    }
}

out :
echo "END";




?>
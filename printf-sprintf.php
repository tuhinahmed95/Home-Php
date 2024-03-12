

<?php  

$name = "thin";
printf("hellow %s",$name);  //string data_type in printf !

printf("<br>");

$amount = 100;
printf("Amount %d",$amount); //numeric intiser data_type in printf !

printf("<br>");

$amount = 10.55;
printf("Amount %f",$amount);  //numeric floting data_type in printf !

printf("<br>");

$amount = 65;
printf("Character %c",$amount);  // %c use for ascii table find for character !

printf("<br>");

$amount = 10;
printf("Binart %b",$amount); //  %b use for find binary number !

printf("<br>");

$amount = 10;
printf("Octal %o",$amount);  // %o use for finding octal number !

printf("<br>");

$amount = 71;
printf("Hexadecimal %x",$amount);  // %x use for finding hexadecimal || when we nedd small letter,we used small x,but when we need capital letter we used capital X !

printf("<br>");

$amount = 20;
$amount2 = 30;
printf("Amount %d Another Amount %d",$amount,$amount2);  //we used multiple variables in printf !

printf("<br>");

$amount = 50;
$amount2 = 100;
printf('Amount %2$d Another Amount %d',$amount,$amount2);  //when we need second variable see in first place,we use single string and use 2 and $ scine !

printf("<br>");

$amount = 100;
printf('your first amount : %1$d and your second amount : %1$d',$amount);

printf("<br>");

$amount = 10.45;
printf("your amount is : %f",$amount);  //  use for floting in printf !

printf("<br>");

$amount = 10.45;
printf("your amount is : %.2f",$amount);  // .2 use for .2 number count !!

printf("<br>");

$name = "shamsujoha";
printf("[%15s]",$name); // %number s use for spacing right align !!

printf("<br>");

$name = "shamsujoha";
printf("[%-15s]",$name); // % -number s use for spacing left align !! 

printf("<br>");

$name = "Rafin";
printf("[%'*8s]",$name);  // spacing fuilup for star mark !!

printf("<br><br><br>");


//  use to the sprintf || sprintf allow to use varriables !!

$first_name = "Tuhin";
$last_name ="Mia";

$new_str = sprintf("your first name is : %s And your last name is : %s", $first_name,$last_name);
echo "New =". " ".$new_str;




?>
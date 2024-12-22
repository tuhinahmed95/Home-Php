<?php

// $emp = [
//     [1,'Tuhin','Developer',78000],
//     [2,'Rafia','Sofware Enginier',40000],
//     [3,'Fariha','Senior Enginier',45500],
//     [4,'Anika','BCS',35000],
// ];
echo "<table border='2px' cellpadding='10px' cellspacing='0'> 
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Salary</th>
    </tr>
";

$emp = [
    [
        "Id"=>1,
        "Name"=>"Tuhin",
        "Designation"=>"Senior Developer",
        "salary"=>80000,
    ],
    [
        "Id"=>2,
        "Name"=>"Tasrif",
        "Designation"=>"Software Enginier",
        "salary"=>70000,
    ],
    [
        "Id"=>3,
        "Name"=>"Babu",
        "Designation"=>"Bussiness",
        "salary"=>20000,
    ],
];
foreach($emp as list("Id" =>$id, "Name" =>$name,"Designation" =>$designation,"salary" =>$salary)){ 
    // foreach($emp as list($id,$name,$designation,$salary)){ 
    echo " <tr> 
            <td>$id</td>
            <td>$name</td>
            <td>$designation</td>
            <td>$salary</td>
        </tr>";
}
echo "<table/>";

echo "<br/>";
echo "<br/>";

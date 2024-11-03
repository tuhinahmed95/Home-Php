<?php

$marks = [
    "Tuhin"=>['physics'=>80,'chemistry'=>89,'math'=>96],
    "Rafia"=>['physics'=>78,'chemistry'=>78,'math'=>90],
    "Salman"=>['physics'=>87,'chemistry'=>67,'math'=>78],
    "Shahrukh"=>['physics'=>56,'chemistry'=>87,'math'=>80],
];
echo "<table border='2px' cellpadding='5px' cellspacing='0'>
        <tr>
            <th>Student Name</th>
            <th>Physics</th>
            <th>Chemistr</th>
            <th>Math</th>
        </tr>
";
foreach($marks as $key => $value1){ 
    echo "<tr>";
    echo "<td>$key</td>";
    foreach($value1 as $value2){ 
        echo "<td>$value2</td>";
    }
    echo "<tr/>";
}
echo "<table/>";
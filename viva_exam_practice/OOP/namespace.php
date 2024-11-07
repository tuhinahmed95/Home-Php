<?php

include ('namespaces\blog\database_connect.php');
use namespaces\blog\database_connect\{
    Database,
    
};

class Post { 
    public function __construct()
    {
       echo "this Is Post "; 
    }
}
// new Post();
new Database();


?>
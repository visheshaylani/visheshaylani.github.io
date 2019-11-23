<?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'credit_db';

    
    $con = mysqli_connect("$server", "$username", "$password", "$db");
    // $db = new mysqli('localhost' , $user, $password, $db) or die("cannot conect");
    if(!$con){
        
        die('Could not connect');
    }

?>

<?php
function dbconnection(){
    $host = "127.0.0.1";
    $database = "Register";
    $username = "root";
    $password = "";

    $connection = new mysqli($host,$username,$password,$database);

    if ($connection->connect_error){   
        die("Connection error: " . $connection -> connect_error);
    }

    return $connection;
}
?>
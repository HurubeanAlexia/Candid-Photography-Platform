<?php

$host="localhost";
$user="root";
$pass="";
$db="candid";
$conn= new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
    echo "Failder to connect db".$conn->connect_error;
}

?>
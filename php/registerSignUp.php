<?php

include 'connect.php';

if(isset($_POST['signUp'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $password=md5($password);
    $confirm_password=md5($confirm_password);

    $checkEmail="SELECT * FROM users WHERE email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Email already exists!";
    }
    else{
        $insertQuery = "INSERT INTO users(name, username, email, password, confirm_password) VALUES ('$name', '$username', '$email', '$password', '$confirm_password')";
        if($conn->query($insertQuery)==TRUE){
                header("location: register.php");
            }
            else{
                echo "Error:".$conn->error;
            }
    }
}

?>
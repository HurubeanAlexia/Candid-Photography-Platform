<?php 

include 'connect.php';

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
    $result = $conn->query(($sql));
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("location: firstPage.php");
        exit();
    }
    else{
        echo "Not found, incorrect email or password";
    }
}

?>
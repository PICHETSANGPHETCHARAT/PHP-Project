<?php
    session_start();
    include "connect.php";
    $password = mysqli_real_escape_string($connect,$_POST["password"]);
    $email = mysqli_real_escape_string($connect,$_POST["email"]);
    $sql="SELECT email,password FROM user_data WHERE email='$email'and password='$password'";
    $mysql_result=mysqli_query($connect,$sql);
    if($mysql_result){
        echo "complete";
        $_SESSION["email"]=$email;
        $_SESSION["password"]=$password;
        header('location:data.php');
    }else{
        echo "fail";
    }
?>
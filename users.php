<?php

    $con = mysqli_connect('localhost','root','');
    
    if($con){
        echo "Connection Successful";
    }else{
        echo "No Connection";
    }
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    
    mysqli_select_db($con, 'php_project');
    $query = "insert into user_info (name, email, number, message) values ('$name', '$email', '$number', '$message')";

    mysqli_query($con, $query);

    echo $query
?>
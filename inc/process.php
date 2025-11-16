<?php
require "connection.php";
if(isset($_POST["register"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $encrypt_password = md5($password);

    //check if user already exist 
    $sql_check = "SELECT * FROM users WHERE email = '$email'";
    $query_check = mysqli_query($connection, $sql_check);
    if(mysqli_fetch_assoc($query_check)){
        //give notification 
        $error = "User already exist";
    }else {
        
        //insert data into database using procedural method
        $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$encrypt_password')";
        $query = mysqli_query($connection, $sql) or die("Can't save data");
        $success = "Registration Completed";
    }
    }
    if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $encrypt_password = md5($password);
    //Check if user exist
    $sql_check2 = "SELECT * FROM users WHERE email = '$email'";
    $query_check2 = mysqli_query($connection, $sql_check2);
    if(mysqli_fetch_assoc($query_check2)){
        //Check if the email and password exist 
        $sql_check = "SELECT * FROM users WHERE email = '$email'AND password = '$encrypt_password'";
        $query_check = mysqli_query($connection, $sql_check);
        if(mysqli_fetch_assoc($query_check)){
            //login to dashboard
        $success = "User Logged in";
    }else {
        
        //User Not found
        $error = "User password error";       
    }

    //check if user email and password already exist 
    
    }else {
        
        //User Not found
        $error = "User email not found";       
    }
    }
?>  
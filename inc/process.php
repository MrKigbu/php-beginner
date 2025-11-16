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
        echo "User already exist";
    }else {
        
        //insert data into database using procedural method
        $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$encrypt_password')";
        $query = mysqli_query($connection, $sql) or die("Can't save data");
        echo "Data saved to Database";
    }
    }

?>  
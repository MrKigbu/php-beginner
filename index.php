<?php
//how to do validation with PHP
$old_password = "123456";
if(isset($_POST["login"])){
    //password validate 
    if($old_password == $_POST["password"]){
         $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    echo "Welcome ooo $name, Your email is $email, and also your password is $password, thank you very much";

    echo "<b style='color:primary'>Login Successful</b>";
    }else{
        echo "<b style='color:red'>Login failed</b>";
    }
    //declare the variable
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Submit Form </h2>
   
    <form action="" method="POST">
        <label for="">Name:</label>
        <input type="text" name="name" id=""><br>
        <label for="">Email:</label>
        <input type="email" name="email" id=""> <br>
        <label for="">password:</label>
        <input type="password" name="password" id="">
        <button type="submit" name="login" >login</button>
    
</body>
</html>
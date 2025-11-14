<?php
//how to assess your data from a POST Method
if(isset($_POST["login"])){
    //declare the variable
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    echo "Welcome ooo $name, Your email is $email, and also your password is $password, thank you very much";

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
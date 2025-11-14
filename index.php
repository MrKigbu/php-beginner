<?php
if(isset($_POST["login"])){
    echo var_dump($_POST);
}
if(isset($_POST["register"])){
    echo var_dump($_POST);
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
        <input type="text" name="name" id="">
        <button type="submit" name="login" >Submit</button>
    </form>
    <br>
    <form action="" method="POST">
        <label for="">Register:</label>
        <input type="text" name="register" id="">
        <button type="submit" name="First_name" >Submit</button>
    </form>
</body>
</html>
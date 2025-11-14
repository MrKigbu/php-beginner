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
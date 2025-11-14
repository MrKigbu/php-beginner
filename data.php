<?php
session_start();
//using the if condition
if(isset($_SESSION["user_name"]))
{
    echo $_SESSION["user_name"];
}else{
    echo "User Logged out";

}
?>
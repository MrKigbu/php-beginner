<?php 
session_start();
if(!isset($_SESSION["user"])){
    header("location: login.php");
}
require "inc/header.php";
require "inc/process.php";
include "body.php";
require "inc/footer.php";

?>

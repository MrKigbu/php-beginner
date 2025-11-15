<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";
$database = "phpbeginner";
$user = "root";
$password ="root";
$port = 8889;
//connecting to mySQL database 

$connection = mysqli_connect($host, $user, $password, $database, $port ) or die("database cannot connect at the moment");
if($connection){
    echo "Database Connected succesfully";
}

<?php
// Enable full error display
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sammy Love in the PHP building</title>
</head>
<body>
    <h1>I LOVE CODING PERSONALLY</h1>

    <?php
 //reference argument 
 function addnum(&$num){
$num +=5;
 }
 $number =11;
 addnum($number);
 echo $number;

    ?>
</body>
</html>

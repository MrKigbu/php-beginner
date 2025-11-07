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
    //conditonal statement
    #if statement 
$age1 = 20;
$age2 = 120;
$age3 = 320;
$age4 = 10;
$child = "Baby Sitter";
$adult = "big Daddy";

if ($age1 <= 10) {
    echo "Im an adult";
}
//elseif
elseif($age1 ==20){
    echo "I am getting notices";
}
//else statement
else{ echo "I am not old enough";}
//less than condition

    ?>
</body>
</html>

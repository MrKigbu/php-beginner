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
   //loops
   //while loops
   $digit = 1;
   while ($digit <= 3)
   {
    echo "The digit is " .  $digit. "<br>";
    $digit++;
   }
//do while loop

$x = 1;

do {
    echo "The number is " .$x. "<br>";
    $x++;
} while ($x<=5);

//for loop
for($x = 0; $x <=10; $x++ )
{
    echo "The whole complete Number is $x<br>";
}

//for each loop, its initiated only with arrays 
$cars = array("Blue car", "red car", "green car", "Purple car");
foreach($cars as $key=> $value) {
    echo "This is the $value with the number $key <br>";
}
    ?>
</body>
</html>

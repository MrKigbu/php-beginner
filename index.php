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
$min = array(
    "name" => array (
        "Subname" => "Sammy Love",
        "Subname1" => "Sammy lolo",
        "Subname2" => "Sammy Lobatan",
        "Subname3" => "Sammy Emilokan",),
     "name1" =>"John maigemu",
     "name2" => "Sani Mai Gindi", 
     "name3" =>"Lover Boy", 
     "name4" =>"Shegunaye");

echo $min["name"]["Subname3"] . "<br>";
echo $min["name1"];
// echo var_dump($min);

    ?>
</body>
</html>

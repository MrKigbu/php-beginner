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
define('name', 'sammy');
define("listdata", array("Sammy", "Felicity", "John bull"));
var_dump(listdata);
echo listdata[2];
echo name;
    ?>
</body>
</html>

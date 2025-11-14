<?php
//Convert String to Time
date_default_timezone_set("Africa/Lagos");

$t = strtotime("10:30pm November 21 2025");
echo "The new time is ".date("Y-m-d h:s:i:a", $t) ;

// echo date("H")."<br>";
// //time h for 12hrs 
// echo date("h")."<br>";
// //time i for minutes  
// echo date("i")."<br>";
// //time s for seconds 
// echo date("s")."<br>";
// //time a for lowercase Ante meridien 
// echo date("a")."<br>";

// //using everything together 
// echo "The time is " .date("H:h:i:s:a");
?>
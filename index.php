<?php
//time H for 24hrs 
date_default_timezone_set("Africa/Lagos");
echo date("H")."<br>";
//time h for 12hrs 
echo date("h")."<br>";
//time i for minutes  
echo date("i")."<br>";
//time s for seconds 
echo date("s")."<br>";
//time a for lowercase Ante meridien 
echo date("a")."<br>";

//using everything together 
echo "The time is " .date("H:h:i:s:a");
?>
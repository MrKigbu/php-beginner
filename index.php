<?php
// //file include gives a warning and continue running the code if the file does not exist
// include "./file2.php";
// echo $sts;
// echo "Oh yes, I love how i'm coding now!!!"
//while require stops the code immediately he file is not found 
require "./file2.php";
echo $sts;
echo "Oh yes, I love how i'm coding now!!!"
?>
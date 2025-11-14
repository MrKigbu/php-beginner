<?php
//File_put_Content
$content = "<h1> I'M SURE YOU KNOW HOW WE DO IT</h1>" ;
//file will be created, and if the file does exist, it will override the file 
if(file_put_contents("./about.html", $content, FILE_APPEND)){
    echo "File APPENDED";
}
?>

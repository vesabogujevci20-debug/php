<?php
$my_file=fopen("idk.txt","r");
while(!feof($my_file)){
    echo fgets($my_file),"<br>";

};
fclose("idk.txt","r");


?>
<?php


$x=3;

function sum(){
    global $x,$y;
    $y=5;
    echo $y."<br>";
    echo $x+$y ."<br>";
}
sum();
echo $y;


?>
<?php

$numri1=-4;
if(($numri1>0)&&($numri1<10)){
    echo "$numri1 dy kushtet jane te verteta <br>";
    
}
else{
    echo "nuk u plotesuan dy kushtet <br>";
    
}

$numri2=4;
if(($numri2>0)||($numri2<10)){
    echo "$numri2 mjafton nje kushtim per te qene i vertete <br>";
    
}

$numri3=5;
$numri4=5;

if($numri3==$numri4){
    echo "numrat jane te barabarte <br>";
}
else{
    echo "numrat nuk jane te barabarte <br>";
}









$x=5;
while($x<=10){
    echo "vlera e x eshte $x <br>";
    $x++;
}
do{
    echo "vlera e x eshte $x <br>";
    $x++;
}
while($x<=10);











for($x=0;$x<=15;$x++){
    echo "vlera e x eshte $x <br>";
}


    




for($x=0;$x<=15;$x++){
    echo "vlera e x eshte $x <br>";
}


    




$car=array("bmw","audi","mercedes","tesla");
foreach($car as $value){
    echo "$value <br>";
} 





?>
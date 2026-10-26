<?php

function counter(){
    static $x=4 ;
    $x++;
    echo "ky eshte numri :$x . <br>";
    
}
counter();
counter();
counter();

?>
<?php

 $host="localhost";
 $user="root";
 $pass="";
 $dbname="daris";


try{
    $conn=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
    echo "connected";
}catch(Exception $e){
    echo "not connected";

}

?>
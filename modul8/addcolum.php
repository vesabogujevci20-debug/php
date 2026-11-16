<?php
try{
    $conn=new PDO("mysql:host=localhost; dbname=digital2","root","");

    $sql="ALTER table users add email varchar(255)";

    $conn->exec($sql);
    echo "colum created";
  
}catch(Exception $e){

   echo "colum not created";
    

}

?>
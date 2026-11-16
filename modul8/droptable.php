<?php
try{
    $conn=new PDO("mysql:host=localhost; dbname=digital2","root","");

    $sql="drop table users";

    $conn->exec($sql);
    echo "colum created";
  
}catch(Exception $e){

   echo "colum not created";
    

}

?>
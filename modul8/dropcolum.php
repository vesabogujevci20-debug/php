<?php
try{
    $conn=new PDO("mysql:host=localhost; dbname=digital2","root","");

    $sql="ALTER table users drop email";

    $conn->exec($sql);
    echo " columdropt";
  
}catch(Exception $e){

   echo "colum not dropt";
    

}

?>
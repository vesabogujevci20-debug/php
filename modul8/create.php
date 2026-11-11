<?php

 $host="localhost";
 $user="root";
 $pass="";
 $dbname="digital2";


try{
    $conn=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
    $sql="create table users(id int(6) not null auto_increment primary key ,
    username varchar(30) not null,
    password varchar(30) not null)";

    $conn->exec($sql);


    echo "database is created";
}catch(Exception $e){
    echo " database not created";

}

?>
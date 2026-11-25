<?php
include_once ('connection.php');


if(isset($_POST['username'],$_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    echo "Username :". $username."<br>";
    echo "password :". $password."<br>";
}

?>
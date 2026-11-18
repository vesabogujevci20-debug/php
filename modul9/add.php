<?php



include_once ('connection.php');

if(isset($_POST['sumbit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="insert into users (name,password)
    values(:username,:password)";

    $sqlQuery=$conn->prepare($sql);
    $sqlQuery->bindParam(':username',$username);
    $sqlQuery->bindParam(':password',$password);
    $sqlQuery->execute();
    echo"data save successfully";


    

}



?>
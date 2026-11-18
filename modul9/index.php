<?php
include_once ('connection.php');


if(isset($_POST['username'],$_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    echo "Username :". $username."<br>";
    echo "password :". $password."<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method="post" action="add.php">
    <label for="username">username:</label>
    <input type=" text" id="username" name="username">
    <label for="password">password:</label>
    <input type="password" id="password" name="password">

    <input type="submit" name="sumbmit" value="submit">



</form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border:1px solid black;
            border-collapse:collapse ;
        }
        td,th{
            padding: 10px 20px;
        }
    
    </style>
</head>
<body>

<?php
include_once("connection.php");

$sql="select * from users";

$getusers=$conn->prepare($sql);
$getusers->execute();

$users=$getusers->fetchAll();




?>
<h2>users<h2>
    <table>
        <tr>
            <th>id<th>
                <th>username<th>
                    <th>password<th>
            
           
        </tr>
       <?php 
        foreach($users as $users){
            echo"<tr>";
            echo"<td>".$users["id"]."</td>";
            echo"<td>".$users["username"]."</td>";
            echo"<td>".$users["password"]."</td>";
            echo"</tr>";
        }

       ?>     




    </table>
<br>
<a href="index.html">add users</a>
    
</body>
</html>
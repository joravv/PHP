<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="user">username</label>
    <input type="text">
    <label for="placeholder=password"></label>
    <input type="password">
    <input type="submit" value="submit">
</body>
</html>

<?php

$username = $_GET['username'];
$password = $_GET['password'];
echo $username;
echo "br";
echo $password;

$host = 'localhost';
    $user = 'root';
    $pass = '';
$dbname = 'test';

    try{


        $conn = new PDO("mysql:host=$host" , $user, $pass);
$sql = "  CREATE DATABASE testnita";
$conn->exces($sql);

        echo "Connected";
      echo " database coonected";

    }catch(Exeption $e){


        echo "Not connected";

 echo " database Not connected";

    }

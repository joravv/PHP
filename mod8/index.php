<?php 


    $host = 'localhost';
    $db = 'restaurant';
    $user = 'root';
    $pass = '';


    try{


        $conn = new PDO("mysql:host=$host; dbname=$db" , $user, $pass);
$sql = "CREATE TABLE user(
id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL)";

$conn->exec($sql);

        echo "Connected";

    }catch(Exeption $e){


        echo "Not connected";


    }


?>
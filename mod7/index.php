<?php 


    $host = 'localhost';
    $user = 'root';
    $pass = '';


    try{


        $conn = new PDO("mysql:host=$host" , $user, $pass);
$sql = "  CREATE DATABASE testnita";
$conn->exces($sql);

        echo "Connected";
      echo " database coonected"

    }catch(Exeption $e){


        echo "Not connected";

 echo " database Not connected";

    }


?>
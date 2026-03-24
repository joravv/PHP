<?php

include_once('config.php');

$sql = "SELECT * FROM  users";

$getproducts = $conn->prepare($sql);

$getproducts -> execute();

$products = $getproducts->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
            border: 1px solid black;
        }

        td, th{
            padding: 15px;
        }

        th{
            background-color: green;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
    </tr>



    <?php
        foreach($products as $product){ ?>
            <tr>
            <td><?php echo $getproducts['id']; ?></td>
            <td><?php echo $getproducts['name']; ?></td>
            <td><?php echo $getproducts['price']; ?></td>
            <td><?php echo $getproducts['description']; ?></td>
            </tr>
        <?php } ?>
</table>

    
</body>
</html>

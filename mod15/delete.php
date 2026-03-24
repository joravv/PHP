<?php

include_once('config.php');

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=:id";

$deleteproducts = $conn->prepare($sql);

$deleteproducts->bindParam(':id', $id);

$deleteproducts -> execute();

header('Location:dashboard.php');

?>
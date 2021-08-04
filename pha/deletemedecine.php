<?php

include("connection.php");


 $id=$_GET['id'];


$sql = "DELETE FROM medecine WHERE id='$id'";
$query = $conn->exec($sql);

header("Location: viewmedecine.php ");
?>
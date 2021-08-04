<?php

include("connection.php");


 $id=$_GET['id'];


$sql = "DELETE FROM data WHERE id='$id'";
$query = $conn->exec($sql);

header("Location:report.php");
?>
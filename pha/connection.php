<?php

$hostname='localhost';
$username='root';
$password='';
try{

	$conn=new PDO("mysql:host=$hostname;dbname=cat2",$username,$password);
	
}

catch(PDOException $e){
	echo $e->getMessage();
}
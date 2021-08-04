<?php
include_once('connection.php');
if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	

 $sql =  "INSERT INTO users VALUES ( :id, :fname, :lname,  :username, :password)";
$query=$conn->prepare($sql);
$query->bindparam(':id',$id);
$query->bindparam(':fname',$fname);
$query->bindparam(':lname',$lname);
$query->bindparam(':username',$username);
$query->bindparam(':password',$password);
$query->execute();

 if (!$sql) {
            echo '<script language="javascript">';
            echo 'alert("Invalid Details")';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Successful recorded !")';
            echo '</script>';
        }
    }
   ?>


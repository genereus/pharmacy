<?php
include_once('connection.php');
if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$phone=$_POST['phone'];
	$addresse=$_POST['addresse'];
	$medecine=$_POST['medecine'];
	$package=$_POST['package'];
	$arrivaltime=$_POST['arrivaltime'];
	


 $sql =  "INSERT INTO supplier VALUES ( :id, :fname, :lname, :phone, :addresse, :medecine, :package, :arrivaltime)";
$query=$conn->prepare($sql);
$query->bindparam(':id',$id);
$query->bindparam(':fname',$fname);
$query->bindparam(':lname',$lname);
$query->bindparam(':phone',$phone);
$query->bindparam(':addresse',$addresse);
$query->bindparam(':medecine',$medecine);
$query->bindparam(':package',$package);
$query->bindparam(':arrivaltime',$arrivaltime);
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
    @header('location: viewmedeine.php');
   ?>


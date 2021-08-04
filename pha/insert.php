<?php
include_once('connection.php');
if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$age=$_POST['age'];
	$sex=$_POST['sex'];
	$phone=$_POST['phone'];
	$temp=$_POST['temp'];
	$drug=$_POST['drug'];
	$amount=$_POST['amount'];
	$date=$_POST['date'];
	
	

 $sql =  "INSERT INTO data VALUES ( :id, :fname, :lname,  :age, :sex,  :phone, :temp, :drug,:amount, :date)";
$query=$conn->prepare($sql);
$query->bindparam(':id',$id);
$query->bindparam(':fname',$fname);
$query->bindparam(':lname',$lname);
$query->bindparam(':age',$age);
$query->bindparam(':sex',$sex);
$query->bindparam(':phone',$phone);
$query->bindparam(':temp',$temp);
$query->bindparam(':drug',$drug);
$query->bindparam(':amount',$amount);
$query->bindparam(':date',$date);
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
    @header('location: report.php');
   ?>


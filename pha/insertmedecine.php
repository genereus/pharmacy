<?php
include_once('connection.php');
if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$typee=$_POST['typee'];
	$entrytime=$_POST['entrytime'];
	$exittime=$_POST['exittime'];
	$expired=$_POST['expired'];
	$amount=$_POST['amount'];
	


 $sql =  "INSERT INTO medecine VALUES ( :id, :fname, :lname, :typee, :entrytime, :exittime, :expired, :amount)";
$query=$conn->prepare($sql);
$query->bindparam(':id',$id);
$query->bindparam(':fname',$fname);
$query->bindparam(':lname',$lname);
$query->bindparam(':typee',$typee);
$query->bindparam(':entrytime',$entrytime);
$query->bindparam(':exittime',$exittime);
$query->bindparam(':expired',$expired);
$query->bindparam(':amount',$amount);
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


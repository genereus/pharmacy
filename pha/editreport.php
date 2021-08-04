<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: report.php');
	exit;
}
?>

<?php

include_once('connection.php');
if(isset($_POST['update'])){
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

  

  $sql="UPDATE data SET id='$id',fname='$fname',lname='$lname',age='$age',sex='$sex',phone='$phone',temp='$temp',drug='$drug',amount='$amount',date='$date' WHERE id='$id'";
  $query=$conn->exec($sql);

  @header('location: report.php');

}


$id=$_GET['id'];

$select=$conn->query("SELECT * FROM data Where id='$id'");

While($row=$select->fetch(PDO::FETCH_ASSOC)){
$id=$row['id'];
$fname=$row['fname'];
$lname=$row['lname'];
$age=$row['age'];
$sex=$row['sex'];
$phone=$row['phone'];
$temp=$row['temp'];
$drug=$row['drug'];
$amount=$row['amount'];
$date=$row['date'];


}
?>
<!DOCTYPE html>
<html>
<head>
<title> - Pharmacy Management System</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="table.css" type="text/css" media="screen" />
<script src="js/function.js" type="text/javascript"></script>
<style>#left-column {height: 477px;}
 #main {height: 477px;}
</style>
</head>

    <body>
<div id="content">
<div id="header">
<h1><a href="#"><img src="images/hd_logo.jpg"></a> FAMIKAN Management System</h1></div>
<div id="left_column">
<div id="button">
<ul>
            <li><a href="manager.php">New Castomer</a></li>
            <li><a href="adduser.php">Add Pharmacist</a></li>
            <li><a href="viewuser.php">View User</a></li>
            
            <li><a href="report.php" target="_top">Report</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
                   

</center>
   </div>
   <form action="editreport.php" method="post">
<table border="2" style="width: 227px;margin-left:300px;margin-top:-50;">
<tr>
<td>Id</td><td><input type="number" name="id" value="<?php echo $id ?>">  </td>
</tr>
<tr>
<td>FIRST NAME</td><td><input type="text" name="fname" value="<?php echo $fname?>">  </td>
</tr>
<tr>
<td>LAST NAME</td><td><input type="text" name="lname" value="<?php echo $lname ?>"> </td>
</tr>
<tr>
<td>Age</td><td><input type="text" name="age" value="<?php echo $age ?>"> </td>
</tr>
<tr>
<td>SEX</td><td><input type="text" name="sex" value="<?php echo $sex ?>"> </td>
</tr>
<tr>
<td>TELEPHONE</td><td><input type="text" name="phone" value="<?php echo $phone ?>"> </td>
</tr>
<tr>
<td>TEMPERATURE</td><td><input type="text" name="temp" value="<?php echo $temp ?>"> </td>
</tr>
<tr>
<td>DRUG</td><td><input type="text" name="drug" value="<?php echo $drug ?>"> </td>
</tr>
<tr>
<td>AMOUNT</td><td><input type="text" name="amount" value="<?php echo $amount ?>"> </td>
</tr>

<tr>
<td>DATE</td><td><input type="text" name="date" value="<?php echo $date ?>"> </td>
<td><input type="submit" name="update" value="Update">  </td>
</tr>
</table>
        
   
   
                </div>
              </div>
            </div>
            


                   </article>
          
        </section>
        <div>
        
        
        </div>
             

            </body>
            
            </div>
<div id="footer" align="Center" style="width: 1053px">Pharmacy System 2021 Copyright All Rights Reserved</div>
</div>
</body>
</html>

</html>



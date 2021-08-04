<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>

<?php

include_once('connection.php');
if(isset($_POST['update'])){
    $id=$_POST['id'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $typee=$_POST['typee'];
  $entrytime=$_POST['entrytime'];
  $exittime=$_POST['exittime'];
  $expired=$_POST['expired'];
  $amount=$_POST['amount'];
 

  

  $sql="UPDATE medecine SET id='$id',fname='$fname',lname='$lname',typee='$typeee',entrytime='$entrytime',exittime='$exittime',expired='$expired',amount='$amount' WHERE id='$id'";
  $query=$conn->exec($sql);

  @header('location: index.php');

}


$id=$_GET['id'];

$select=$conn->query("SELECT * FROM medecine Where id='$id'");

While($row=$select->fetch(PDO::FETCH_ASSOC)){
$id=$row['id'];
$fname=$row['fname'];
$lname=$row['lname'];
$typee=$row['typee'];
$entrytime=$row['entrytime'];
$exittime=$row['exittime'];
$expired=$row['expired'];
$amount=$row['amount'];



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
   <form action="editmedecine.php" method="post">
<table border="2" style="width: 227px;margin-left:300px;margin-top:-50;">
<tr>
<td>ID</td><td><input type="number" name="id" value="<?php echo $id ?>">  </td>
</tr>
<tr>
<td>FIRST NAME</td><td><input type="text" name="fname" value="<?php echo $fname?>">  </td>
</tr>
<tr>
<td>LAST NAME</td><td><input type="text" name="lname" value="<?php echo $lname ?>"> </td>
</tr>
<tr>
<td>TYPE</td><td><input type="text" name="typee" value="<?php echo $typee ?>"> </td>
</tr>
<tr>
<td>ENTRY TIME</td><td><input type="text" name="entrytime" value="<?php echo $entrytime ?>"> </td>
</tr>
<tr>
<td>EXIT TIME</td><td><input type="text" name="exittime" value="<?php echo $exittime ?>"> </td>
</tr>
<tr>
<td>EXPIRED</td><td><input type="text" name="expired" value="<?php echo $expired ?>"> </td>
</tr>
<tr>
<td>AMOUNT</td><td><input type="text" name="amount" value="<?php echo $amount ?>"> </td>
</tr>

<td><a href="viewmedecine"> <input type="submit" name="update" value="Update"> </a> </td>
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



<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title> - Pharmacy Management System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="style/dashboard_styles.css"  media="screen" />
<style>
#left_column{
height: 470px;
}
.auto-style1 {
	margin-top: 147px;
}
</style>
</head>
<body>
<div id="content">
<div id="header" style="background-color: skyblue">
<h1><a href="#"><img src="images/hd_logo.jpg"></a> FAMIKAN Management System</h1></div>
<div id="left_column" style="height: 530px">
<div id="button">
<ul>
            <li><a href="manager.php">New Customer</a></li>
            <li><a href="medecine.php">Medecine</a></li>
            <li><a href="viewmedecine.php">View Medecine</a></li>

            <li><a href="supplier.php">Supplier</a></li>

            <li><a href="adduser.php">Add Pharmacist</a></li>
            <li><a href="viewuser.php">View User</a></li>
            
            <li><a href="report.php"target="_top">View Customer</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
</div>
</div>
<div id="main" style="height: 938px; width: 895px;">
<!-- Dashboard icons -->
            <div class="grid_7">
            	<img src="">
        </div>
        
       <center><h3>Customer Form<h3></center> 
      <hr>  
        <center><div>
        <form method="POST" action="insert.php" style="height: 297px">
  ID:<br>
  <input type="text" name="id" requred><br>
  First name:<br>
  <input type="text" name="fname" requred>
  <br>
  Last name:<br>
  <input type="text" name="lname" requred>
  <br>
  Age:<br>
  <input type="text" name="age" requred>
  <br>
  Sex:<br>
  <input type="text" name="sex" requred>
  <br> Phone:<br>
  <input type="text" name="phone" requred>
  <br>
  Temperature:<br>
  <input type="text" name="temp" requred><br>
  Drug name:<br>
  <input type="text" name="drug" requred><br>
  Amount:<br>
  <input type="text" name="amount" requred><br>
  Date:<br>

  <input type="date" name="date" requred ><br><br>
  <input type="submit" name="submit" value="submit">  <input type="reset" name="reset">





  
</form>

        </div></center>
        
        
  <div id="footer" align="Center" style="height: 133px" class="auto-style1"> 
	  <br><br>Pharmacy System 2021 Copyright All Rights Reserved</div>
</div>
</body>
</html>

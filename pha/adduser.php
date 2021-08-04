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
<script src="js/function.js" type="text/javascript"></script>
<style>
#left_column{
height: 470px;
}
</style>
</head>
<body>
<div id="content">
<div id="header">
<h1><a href="#"><img src="images/hd_logo.jpg"></a> FAMIKAN Management System</h1></div>
<div id="left_column" style="height: 387px">
<div id="button">
<ul>
            <li><a href="manager.php">New Customer</a></li>
            <li><a href="#">Medecine</a></li>
            <li><a href="#">Supplier</a></li>

            <li><a href="adduser.php">Add Pharmacist</a></li>
            <li><a href="viewuser.php">View User</a></li>
            
            <li><a href="report.php"target="_top">Report</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
</div>
</div>
<div id="main" style="height: 500px">
<!-- Dashboard icons -->
           
        
       <center><h3>Add Pharmacist<h3></center> 
      <hr>  
        <center><div>
        <form method="POST" action="insertuser.php" style="height: 297px">
  ID:<br>
  <input type="text" name="id" requred><br>
  First name:<br>
  <input type="text" name="fname" requred>
  <br>
  Last name:<br>
  <input type="text" name="lname" requred>
  <br>
  username:<br>
  <input type="text" name="username" requred>
  <br>

  Password:<br>
  <input type="password" name="password" requred><br><br>
 <input type="submit" name="submit" value="submit">  <input type="reset" name="reset">






  
</form>
        </div></center>
        
        
  <div id="footer" align="Center" style="height: 133px"> Cat 2 advanced php Pharmacy System 2021 Copyright All Rights Reserved</div>
</div>
</body>
</html>

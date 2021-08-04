<!DOCTYPE html>
<html>
<head>
<title> - Pharmacy Management System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="table.css" type="text/css" media="screen" />
<script src="js/function.js" type="text/javascript"></script>
<style>#left-column {height: 477px;}
 #main {height: 477px;}
.auto-style1 {
	margin-left: 210px;
	margin-top:-50px;
	font-size:14px;
	
}
</style>
</head>
<?php

include_once('connection.php');

$sql="SELECT * FROM data";
$query=$conn->prepare($sql);
$query->execute();
?>
<body>
<div id="content">
<div id="header">
<h1><a href="#"><img src="images/hd_logo.jpg"></a> FAMIKAN Management System</h1></div>
<div id="left_column">
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
        
       <center><h3>View Customer<h3></center> 
      <hr>  
        <center>
        
        <table border="1" class="auto-style1" style="width: 655px">
      <tr>
      <th>Id</th>
      <th>FIRST NAME</th>
      <th>LAST NAME</th>
      <th>AGE</th>
      <th>SEX </th>
      <th>TELEPHONE </th>
      <th>TEMPERATURE </th>
      <th>DRUG NAME </th>
      <th>DATE </th>
      <th colspan="2">ACTION </th>
      


    </tr>
    <?php
    while($row=$query->fetch(PDO::FETCH_ASSOC)){
    
      echo "<tr>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['fname']."</td>";
      echo "<td>".$row['lname']."</td>";
      echo "<td>".$row['age']."</td>";
      echo "<td>".$row['sex']."</td>";
      echo "<td>".$row['phone']."</td>";
      echo "<td>".$row['temp']."</td>";
      echo "<td>".$row['drug']."</td>";
      echo "<td>".$row['date']."</td>";
      
      

      echo "<td> <a href=\"editlab.php? id=$row[id]\">Edit</a></td>";
      echo "<td><a href=\"delab.php ? id=$row[id]\" onClick=\"return confirm('are you sure you want to delete')\" >Delete</a></td>";
      echo "</tr>";
      


    }

    ?>
  </table>
  
  
  <img alt="" onclick="print" src="images/print_32px.png"></div>
</div>
</div>
<div id="main">
<!-- Dashboard icons -->
            <div class="grid_7">
            	<img src="">
       <div>
        
        </div></center>
        
        
        
        
				
<div id="footer" align="Center"> Cat 2 advanced php Pharmacy System 2021 Copyright All Rights Reserved</div>
</div>
</body>
</html>

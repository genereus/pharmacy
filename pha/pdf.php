<!DOCTYPE html>
<html>
<head>
<title> - Pharmacy Management System</title>

<style>#left-column {height: 477px;}
 #main {height: 477px;}
.auto-style1 {
	margin-left: 210px;
	margin-top:-50px;
	font-size:14px;
	
}
.auto-style3 {
	margin-left: 503px;
	margin-top: 39px;
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
<center><button onclick="window.print();"><img alt="" src="images/print_32px.png"></button></center>


<center><h1>Pharmacy Report<h1></center>
<hr size="2">

<br><br><br>
        <br><br><br><br>
<center><table border="1px"  style="width: 790px; height: 40px;">
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
      
      

      echo "</tr>";
      


    }

    ?>
  </table><br><br>
       </center>
  
  
   
	</div>
&nbsp;
</body>
</html>

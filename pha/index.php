<!DOCTYPE html>
<html>
<head>
<title>Pharmacy System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle_login.css">
<style>
#content {
height: auto;
}
#main{
height: auto;}
</style>
</head>
<body>
<div id="content">
<img src="img/H.jpg" width="760" height="120">
<div id="main">

  <section class="container">

     <div class="login">
   <img src="images/hd_logo.jpg">
      <h1>Login here</h1>
   
      <form action="login.php" method="post">
     <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
    
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
      </form>
    </div>
    </section>
</div>
<div id="footer" align="Center"> Pharmacy System 2020 Copyright All Rights Reserved</div>
</div>
</body>
</html>
<?php
include_once 'connection.php';
if(isset($_POST['submit']))
            {
              $usern=$_POST['user'];
              $passw=$_POST['password'];
            {
              $sql = "SELECT * FROM manager WHERE username = '$usern' and password='$passw'" or die(mysql_error());
              
              foreach($conn -> query($sql) as $row){
              $count = mysql_num_rows($result);       
                if ($count == 0) 
                  {
                  echo "<script>alert('Welcome To Your Page!'); window.location='manager.php'</script>";
                  } 
                else if ($count > 0)
                  {
                    
                    $_SESSION['id'] = $row['manager_id'];
                    header("location:manager.php");
                  }
            }       
            }}
?>
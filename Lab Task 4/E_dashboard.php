<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



 img{
      float: left;
    }


</style>
</head>
<body>
  
<link rel="stylesheet" type="text/css" href="F.css">


<p></p>

<div class="header">

 <?php
      session_start();

?>
  <p><img src="x_company.png" alt="x_company.png" style="width:100px;height:50px; margin-top: -15px;  ">
    <li><span style="background-color:; color: purple;">Logged in as <a href="F_View_profile.php"><?php echo $_SESSION['uname'] ?> </span></li><br>
  <li> <a href="registration.php"  > Registration |</a>    <a href="logout.php"> Logout  </a> </li>

</div>

<div class="row">
  <div class="column side" style="background-color:white; border-style: groove; font-size: 18px; text-align: left; padding: 20px; ">
    
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    
<b>
      
    <h2>Account</h2>
    <hr>

<b>
<br>
   
   
    <li><a href="F_View_profile.php">View Profile</a></li>
    <li><a href="G_Edit_profile.php">Edit Profile</a></li>
    <li><a href="H_change_picture.php">Change Profile Picture</a></li>
    <li><a href="I_change_password.php">Change Password</a></li>
    <li><a href="logout.php">Logout</a></li>

</form>
     
      
    
  </div>
  <div class="columnr middle" style="background-color:white; text-align: left;padding: 30px; border-style: groove;" >

 <h1 style="text-align: left; padding:40px; font-size: 35px;">Welcome <?php echo $_SESSION['uname'] ?></h1>


  </div>
 
</div>

<div class="footer" style="border-style: groove;">
  <p>Copyright © 2021</p>
</div>

</body>
</html>

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
 

<p></p>
  <?php

include("header.php");
     ?>


 

 
     
      
    
  </div>
  <div class="columnr middle" style="background-color:white; text-align: left;padding: 30px; border-style: groove;" >

 <h1 style="text-align: center; padding:20px; font-size: 35px;">Welcome <?php echo $_SESSION['uname'] ?></h1>

<div class="row">
 
    
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    
<b>
      



<b>
<br>
    <li><a href="login.php">Login</a></li>
    <li><a href="E_dashboard.php">Dashboard</a></li>
    <li><a href="F_View_profile.php">View Profile</a></li>
    <li><a href="G_Edit_profile.php">Edit Profile</a></li>
    <li><a href="H_change_picture.php">Change Profile Picture</a></li>
    <li><a href="I_change_password.php">Change Password</a></li>
    <li><a href="logout.php">Logout</a></li>

</form>

  </div>
 
</div>


    <?php
include("footer.php");
     ?>

</body>
</html>

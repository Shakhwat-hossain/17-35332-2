<!DOCTYPE html>
<html lang="en">
<head>
<title>
</title>
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
<?php
      session_start();


?>

<p></p>

<div class="header">

 
  <p><img src="x_company.png" alt="x_company.png" style="width:100px;height:50px;  margin-top: -15px; ">
     <li><span style="background-color:; color: purple;">Logged in as <a href="F_View_profile.php"><?php echo $_SESSION['uname'] ?> </span></li><br>
  <li> <a href="registration.php"  > Registration |</a>    <a href="logout.php"> Logout  </a> </li>

</div>

<div class="row">
  <div class="column side" style="background-color:white; text-align: left;padding: 30px; border-style: groove; ">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  
   
<b>
      
    <h2>&nbsp;Account</h2>
    <hr>

<b>
<br>


    <li><a href="E_dashboard.php">Dashboard</a></li>
    <li><a href="F_View_profile.php">View Profile</a></li>
    <li><a href="G_Edit_profile.php">Edit Profile</a></li>
    <li><a href="H_change_picture.php">Change Profile Picture</a></li>
    <li><a href="I_change_password.php">Change Password</a></li>
    <li><a href="logout.php">Logout</a></li>

</form>
  </div>
  <div class="columnr middle" style="background-color:white; text-align: left;padding: 30px; border-style: groove; " >

          
           

    <td colspan="2" rowspan="2">
    
        <legend><b>
                <h2>PROFILE</h2>
            </b></legend>
        <table border="0" width="100%">
            <tr>
                <td>
                    Name : <?php echo $_SESSION['name']; ?>
                </td>
                <td rowspan=8 align="center">
                    <img src="Photos/PP.jpg" height="200px" weidth="200px" alt=""><br>
                    <a href="H_change_picture.php">change picture</a>
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    Email : <?php echo $_SESSION['email']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    Gender : <?php echo $_SESSION['gender']; ?>
                </td>
            </tr>
            <tr>
                <td>
                   
                </td>
            </tr>
            <tr>
                <td>
                    Date of Birth : value="<?php echo $_SESSION['dob']; ?>"
                </td>
            </tr>

            <tr>
                <td>
                   
                </td>
              </tr>
              <tr>
                <td>
                  Password : <?php echo $_SESSION['password']; ?>
                     </td>
            </tr>
            <tr>
                <td>
                   
                </td>
            </tr>
            </table>
          



  </div>
 
</div>

<div class="footer" style="border-style: groove;">
  <p>Copyright © 2021</p>
</div>

</body>
</html>

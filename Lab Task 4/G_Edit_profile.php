<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
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

 <p><img src="x_company.png" alt="x_company.png" style="width:100px;height:50px; margin-top: 20px;  ">
    <li><span style="background-color:;margin: 30px; color: darkred;">Logged in as <a href="F_View_profile.php"><?php echo $_SESSION['uname'] ?> 
  <li><a href="registration.php"  > Registration |</a>    <a href="logout.php"> Logout  </a> <</li>

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
  <div class="columnr middle" style="background-color:white; text-align: left;padding: 30px;  border-style: groove; " >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

    <td colspan="2" rowspan="2">
    
        
        <legend><b>
                <h2>EDIT PROFILE</h2>
            </b></legend>
        <form method="post" action="">
            <table border="0" width="100%">
                <tr>
                    <td>Name</td>
                    <td>: <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                      
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <input type="email" name="email" id="" value="<?php echo $_SESSION['email']; ?>"></td>
                    
                </tr>
                <tr>
                    <td colspan="2">
                        
                    </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>:
                    <?php
                    if (!empty($_SESSION['gender']))
                    {
                        if ($_SESSION['gender'] == "Male"){?>
                            <input type="radio" name="gender" value="Male" id="" checked>Male
                            <input type="radio" name="gender" value="Female" id="">Female
                        <input type="radio" name="gender" value="Other" id="">Other
                        <?php
                        }else if($_SESSION['gender'] == "Female"){?>
                            <input type="radio" name="gender" value="Male" id="">Male
                            <input type="radio" name="gender" value="Female" id="" checked>Female
                            <input type="radio" name="gender" value="Other" id="">Other

                        <?php 
                        }else{?>
                        <input type="radio" name="gender" value="Male" id="">Male
                        <input type="radio" name="gender" value="Female" id="">Female
                        <input type="radio" name="gender" value="Other" id="" >Other
                        <?php }
                        }?>

                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        Date of Birth
                    </td>
                    <td>:
                        <input type="date" name="date" id="date" value="<?php echo $_SESSION['dob']; ?>
                        
                    </td>
                </tr>
                <tr>
                      <td colspan="2">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                    </td>
                    <td>:
                        <input type="password" name="password" id="date" value="<?php echo $_SESSION['password']; ?>" > 
                        
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        
                    </td>

                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    
          



  </div>
 
</div>

<div class="footer" style="border-style: groove;">
  <p>Copyright © 2021</p>
</div>

</body>
</html>

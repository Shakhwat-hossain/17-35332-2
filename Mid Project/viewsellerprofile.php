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

  
<link rel="stylesheet" type="text/css" href="style.css">
<?php
      session_start();


?>

<p></p>

<div class="header">

 
  
     <li><span style="background-color:; color: purple;">Logged in as <a href=".php"><?php echo $_SESSION['uname'] ?> </span></li><br>
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


</form>
  </div>
  <div class="columnr middle" style="background-color:white; text-align: left;padding: 30px; border-style: groove; " >

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
   

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
                    <a href="change_picture.php">change picture</a>
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

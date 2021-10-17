 <?php
  session_start();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
     <div class="column side" style="background-color:white; border-style: groove; font-size: 18px; text-align: right; padding: 20px; ">
    <fieldset align = "right">

        <p><img src="x_company.png" alt="x_company.png" style="width:100px;height:50px; margin-top: -15px;  ">
    <span style="background-color:; text-align: right; color: purple;">Logged in as <a href="F_View_profile.php"><?php echo $_SESSION['uname'] ?> </span><br>
   <a href="registration.php"  > Registration |</a>    <a href="logout.php"> Logout  </a> 

</div>

     </fieldset>
  </body>
</html>
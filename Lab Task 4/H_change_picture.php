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
    <li><span style="background-color:;padding-right : 50px; color: darkred;">Logged in as <a href="F_View_profile.php"><?php echo $_SESSION['uname'] ?> <br>
  <li><span style="padding: 40px;"> <a href="registration.php"  > Registration |</a>    <a href="logout.php"> Logout  </a> </span></li>

</div>

<div class="row">
  <div class="column side" style="background-color:white; border-style: groove; text-align: left;padding: 30px; ">
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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

   <?php


   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"Photos/".$file_name);
         echo "Succeeded";
      }else{
         print_r($errors);
      }
   }
?>
<html>
   <body>
      
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "image" />
         <input type = "submit"/>
            
         <ul>
            <li>Sent file: <?php echo $_FILES['image']['name'];  ?>
            <li>File size: <?php echo $_FILES['image']['size'];  ?>
            <li>File type: <?php echo $_FILES['image']['type'] ?>
         </ul>
            
      </form>
      
   </body>
</html>
          



  </div>
 
</div>

<div class="footer" style="border-style: groove;">
  <p>Copyright © 2021</p>
</div>

</body>
</html>

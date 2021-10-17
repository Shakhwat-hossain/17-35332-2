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
<?php
      session_start();


?>

<p></p>

<div class="header">

 
  <p><img src="x_company.png" alt="x_company.png" style="width:100px;height:50px; margin-top: 20px;  ">
    <li><span style="background-color:;padding: 30px; color: darkred;">Logged in as <a href="F_View_profile.php"><?php echo $_SESSION['uname'] ?> </span></li><br>
  <li><a href="registration.php"  > Registration |</a>    <a href="logout.php"> Logout  </a> <</li>

</div>

<div class="row">
  <div class="column side" style="background-color:white;  border-style: groove; ">
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
  <div class="columnr middle" style="background-color:white; border-style: groove; " >
  

<?php

$curpass= $pass= $repass="";
$curpassErr= $passErr =$repassErr="";
$currentpass = $_SESSION['password']; 
if(isset($_POST["submit"]))  
 {  


  if (empty($_POST["curpass"])) {
    $curpassErr ="Current password is required";




  }
  else{
    $curpass= test_input ($_POST["curpass"]);

    $pass= test_input ($_POST["pass"]);

    $repass= test_input ($_POST["repass"]);

    if($curpass != $currentpass)
    {
        $curpassErr= "Current password DO NOT MATCH!";
    }
    else{
      if(empty($_POST["pass"]))
      {
        $passErr="<label class='text-danger'>Enter a password</label><br>";
      }
      else 
      {
        if (empty($_POST["pass"]))
          
        $pass="<label class='text-danger'>Enter a password</label><br>";
      
      else if($pass == $curpass)
      {
        $passErr ="Password must be different from previous one";
        $pass="";
      }
      else{
        if(empty($_POST["repass"]))
        {
          $repassErr="retype new password again";
          $pass="";
        }
        else if($repass != $pass)
        {
          $repassErr="Password does not match";
          $pass="";
          $repass="";
        }
        else if($repass == $pass)
        {
          $repassErr="Password changed successfully";
          $pass="";
          $repass="";
        }
        else  
         {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["uname"],
                     'password'     =>     $_POST["pass"], 
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }
      }
    }
  }
  
}

   
      

}
}
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
 ?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  


           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Append Data to JSON File</h3><br />                 
                <form method="post">  
                    <!--Current Password : <?php echo $_SESSION['password']; ?>-->
                     <br />  
                     <label>Current Password</label>
                     <input type="Password" name="curpass" class="form-control" value="<?php echo $_SESSION['password'];?>"><span class="error">* <?php echo $curpassErr;?></span><br><br>
                    
                     <label>New Password</label>
                     <input type="Password" name="pass"  class="form-control" value="<?php echo $pass;?>"><span class="error">* <?php echo $passErr;?></span><br><br>

                     <label>Re-Type New Password</label>
                     <input type="Password" name="repass"  class="form-control" value="<?php echo $repass;?>"><span class="error">* <?php echo $repassErr;?></span><br><br>
                    
                
                  
                     
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /><br />                      
                    
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  
  

  </div>
 
</div>

<div class="footer" style="border-style: groove;">
  <p>Copyright © 2021</p>
</div>

</body>
</html>

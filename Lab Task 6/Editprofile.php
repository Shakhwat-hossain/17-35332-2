<?php
session_start();
require_once 'Controller/profileInfo.php';




?>


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
  
<link rel="stylesheet" type="text/css" href="style.css">

<p></p>

<div class="header side" style=" color:blueviolet; background-color: lightskyblue;">
      <h2>PROFILE</h2>
</div>
<div class="header middle" style=" color:blueviolet;">
     <span style="color: darkviolet; text-align:center; font-style: Arial;"><b> <h1>SHOP MANAGEMENT SYSTEM</h1></b></span>
     <span style="background-color:; color: purple; text-align:right">Logged in as <a href="profile.php"><?php echo $_SESSION['uname'] ?> </span><br>
      <span style="text-align:right;"> <a href="dashboard.php">Dashboard</a> </span>
      <span style="text-align:right;"> <a href="profile.php">Profile</a> </span>

     <span style="text-align:right;"> <a href="logout.php">Logout</a> </span>
      

</div>
<div class="row">
  <div class="column side" style="background-color:lightskyblue; font-size: 15px; text-align: center; padding-left: 80px;  width: 25%; ">
    
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<b>
      
    <span style="text-align: center; margin-bottom: 20px;">
        
<html>
<head>
 
  <script type="text/javascript">
    window.onload = setInterval(clock,1000);

    function clock()
    {
      var d = new Date();
      
      var date = d.getDate();
      
      var month = d.getMonth();
      var montharr =["Jan","Feb","Mar","April","May","June","July","Aug","Sep","Oct","Nov","Dec"];
      month=montharr[month];
      
      var year = d.getFullYear();
      
      var day = d.getDay();
      var dayarr =["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
      day=dayarr[day];
      
      var hour =d.getHours();
      var min = d.getMinutes();
      var sec = d.getSeconds();
    
      document.getElementById("date").innerHTML=day+" "+date+" "+month+" "+year;
      document.getElementById("time").innerHTML=hour+":"+min+":"+sec;
    }
  </script>
</head>


<body>
    <div style=" color:darkblue;

      ">
   <br>
   <br><b>
   <h2 id="date"></h2>
   <h3 id="time"></h3></b>
</div>
 </body>
</html>
    </span>

    <hr>
     


    <span style="text-align:center; "> <a href=".php"><h2></h2></a></span>

   <span style="text-align:center; "><h2> <a href="Login.php">Login from another account</a></h2>  </span>
   

</form>
     
      
    
  </div>

  
 
  <div class="columnr middle" style="background-color:deepskyblue;  text-align: left;  width: 75%; font-size: 20px; color:blueviolet; " >

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           
<?php

 include "nav2.php";


if (!empty($_SESSION['name'])) {


 $dobErr = $passErr= $nameErr = $emailErr = $genderErr =$error=$unameErr="";
$name =  $email = $gender = $comment =  $uname= $dob="";
$dob=$_SESSION['dob'];
$flag=1;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "User Name is required";
    $flag=0;
  }
  else {
   $name = $_POST["name"];

    if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed";
       $flag=0;
     }
     else {
       if(strlen($name)<2)
       {
          $nameErr = "Name must contains at least two character ";
          $flag=0;
       }
       else {
        $_SESSION['name']=$name;
         
       }
     }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $flag=0;
    }
    else {
      $_SESSION['email']=$email;
       $_SESSION['email']=$email;
    }
  }
  
  

  if (empty($_POST["dob"])) {
    $dobErr = "Date of birth is required";
    $flag=0;
  } else {

    $dob=$_POST["dob"];
     $_SESSION['dob']=$dob;
  }



   



    }
  



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

}
else{
    $msg="error";
    echo $msg;
   
    
  }
?>







<form style="border:3px;   padding: 1em;" action="Controller/updateProfile.php" method="POST" enctype="multipart/form-data">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

 <td colspan="2" rowspan="2">
     <legend><b>
                <h2>EDIT PROFILE</h2>
            </b></legend>
        
            <tr>
                <td>
                   Position: <input type="text" name="role" value="<?php echo $_SESSION['role'];?>">
  
  <br><br>
  Name: <input type="text" name="name" value="<?php echo $_SESSION['name'];?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>



   E-mail: <input type="text" name="email" value="<?php echo $_SESSION['email'];?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>



   Password: <input type="text" name="pass" value="<?php echo $_SESSION['pass'];?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>




  Date of Birth: <input type="date"  name="dob" value="<?php echo $_SESSION['dob'];?>">
  <span class="error">* <?php echo $dobErr;?></span>

  <br><br>
  
  <input type="file" name="photo"><br><br>
 
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

 

  <input type="submit" name="updateProfile" value="Update">
  <input type="reset">



</form>

          



</form>
    

 
</div>

<div class="footer" style="border-style: groove; color:blueviolet;">
  <p>Copyright © 2021</p>
</div>

</body>
</html>

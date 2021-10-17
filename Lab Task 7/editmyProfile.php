<?php
session_start();

require_once 'Controller/myInfo.php';
$myprofile = fetchmyProfile($_SESSION['uname']);
if (isset($_SESSION['flag'])) 

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



<!DOCTYPE html>
<html lang="en">
<head>

<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<style>



 img{
      float: left;
    }


</style>
</head>
<body>

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
  
<link rel="stylesheet" type="text/css" href="style.css">

<p></p>

<div class="header" style="text-align:right;" >

 

  <h1 style="text-align: center;">SHOP MANAGEMENT SYSTEM</h1>
  <span style="background-color:; color: white; text-align:right; font-size: 20px;">        
              Logged in as <a href="myProfile.php" style="color:blue;"> <?php echo  $_SESSION['uname']; ?> 

              <br>
               <a href="logout.php" style=" color: blue; ">Logout</a>  
               <a href="Home.php" style=" color: blue; ">Home</a> </span>

</div>
   
<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
        
      <span  style="text-align:center; " >
     
   <li><a href="registration.php" style="text-align:center; color: blue; "><h2>Create Account</h2></a></li>
   <li><a href="SearchUser.php" style="text-align:center; color: blue; "><h2> Search Profiles </h2></a></li>
   <li><a href="showAllUsers.php" style="text-align:center; color: blue; "> <h2> Show all Profiles </h2>
   </a></li>
        
   </span>
    </ul>
  </div>


   

      
 <span style="text-align:center;">
 <div class="col-6 col-s-9">



    <h1 style="text-align: center; color: blue;">Edit <?php echo $_SESSION['uname'] ?>'s Profile</h1>
    <span style="background-color:deepskyblue;  text-align: left;  width: 75%; font-size: 20px; color:blueviolet; " >
   

<form   action="Controller/updatemyProfile.php" method="POST" enctype="multipart/form-data">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

 <td colspan="2" rowspan="2">
     <legend><b>
                
            </b></legend>
        
            <tr>
    <input type="text" name="role" placeholder="Position" value="<?php echo $_SESSION['role'];?>">
  
  <br><br>
  <input type="text" style="border: 1px solid #505050;" name="name" placeholder="First Name & Last Name" value="<?php echo $_SESSION['name'];?>" >
  <span class="error">* <?php echo $nameErr;?></span> <img src="Photos/<?php echo $Session['photo'] ?>" height="200px" weidth="200px" alt="">
  <br><br>



   <input type="text" style="border: 1px solid #505050;" placeholder="ex:.....@gmail.com" name="email" value="<?php echo $_SESSION['email'];?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>



  <input type="text" name="pass" placeholder="Password" value="<?php echo $_SESSION['pass'];?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>




  <input type="date" style="border: 1px solid #505050;"  name="dob" value="<?php echo $_SESSION['dob'];?>">
  <span class="error">* <?php echo $dobErr;?></span>

  <br><br>
    <label for="photo"></label> <img width="100px" src="Photos/<?php echo $profile['photo'] ?>"> 
 <input  type="file" name="photo" src="Photos/<?php echo $profile['photo']?>">
  
 <br><br>
 


 

  <input type="submit" name="updatemyProfile" value="Update">
  <input type="reset">



</form>

</span>    
</td>
  </div>
  </span>
  <div class="col-3 col-s-12">
    <div class="aside">
     <span style="text-align:center">
      <h2 id="date"></h2>
   <h3 id="time"></h3></b>
  
   </span>
    </div>
  </div>
</div>

<div class="footer">
  <p>Copyright © 2021.</p>
</div>


</body>
</html>

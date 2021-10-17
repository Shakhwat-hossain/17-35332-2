<?php
session_start();

require_once 'Controller/myInfo.php';
if (isset($_SESSION['flag'])) 
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
              Logged in as <a href="myprofile.php" style="color:blue;"> <?php echo  $_SESSION['uname']; ?> 

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


    <h1 style="text-align: center; color: blue;"><?php echo $_SESSION['uname'] ?>'s Profile</h1>
    <span style="background-color:deepskyblue;  text-align: left;  width: 75%; font-size: 20px; color:blueviolet; " >
    <form method="post" action="">

  
   

    <td colspan="2" rowspan="2">
    
        <legend><b>
              
            </b></legend>
        <table border="0" width="100%">
            <tr>
                <td>
                    Name : <?php echo $_SESSION['name']; ?>
                </td>
                <td rowspan=8 align="center">

                    <label for="photo"></label> <img width="100px" src="Photos/<?php echo $profile['photo'] ?>"> <br>
                    <span style="font-size: 20px;">  <a href="change_picture.php">change picture</a></span><br /> 
                  
                </td>

            </tr>
            <tr>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    User Name : <?php echo $_SESSION['uname']; ?>
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
                    Date of Birth : "<?php echo $_SESSION['dob']; ?>"
                </td>
            </tr>

            <tr>
                <td>
                   
                </td>
              </tr>
              <tr>
                <td>
                  Password : <?php echo $_SESSION['pass']; ?>
                     </td>
            </tr>
            <tr>
                <td>
                   
                </td>
            </tr>
            </table><br>
          
<span style="font-size: 20px;"> <a href="editmyProfile.php">Edit</a></span><br>
          
<span style="font-size: 20px;"> <a href="change_password.php">Change Password</a></span>


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

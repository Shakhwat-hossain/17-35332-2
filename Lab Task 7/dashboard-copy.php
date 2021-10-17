<?php
session_start();

if (isset($_SESSION['flag'])) 
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
      <a>DASHBOARD</a>
</div>
<div class="header middle" style=" color:blueviolet;">
   


     <span style="color: darkviolet; text-align:center; font-style: Arial;"><b> <h1>SHOP MANAGEMENT SYSTEM</h1></b></span>
     <span style="background-color:; color: purple; text-align:right">        
              Logged in as <a href="profile.php"> <?php echo  $_SESSION['uname']; ?> </span><br>
      <span style="text-align:right;"> <a href="profile.php">Profile</a> </span>

     <span style="text-align:right;"> <a href="logout.php">Logout</a> </span>

      <span style="text-align:right;"> <a href="Home.php">Home</a> </span>
      

</div>
<div class="row">
  <div class="column side" style="background-color:lightskyblue; font-size: 18px; text-align: center; padding-left: 80px;  width: 25%; ">
    
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<b>
      
    <span style="text-align:center; margin-bottom: 20px;">
        
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
     


    <span style="text-align:center; "> <a href="registration.php"><h2>Registration</h2></a></span>
    

   <span style="text-align:center; "><h2> <a href=".php"></a></h2>  </span>
   

</form>
     
      
    
  </div>

  
 
  <div class="columnr middle" style="background-color:deepskyblue;  text-align: left;  width: 75%; " >

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 
<strong></strong>



</form>
    
<h1 style="text-align: center">Welcome <?php echo $_SESSION['uname'] ?></h1>
 
</div>

<div class="footer" style="border-style: groove; color:blueviolet;">
  <p>Copyright © 2021</p>
</div>

</body>
</html>

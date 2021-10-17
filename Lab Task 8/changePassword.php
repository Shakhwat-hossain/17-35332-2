  <?php
session_start();

require_once('Controller/changePass.php');
if (isset($_SESSION['flag'])) {
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
            <script>
        

        function validate() {
  let x = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Email must be filled out");
   
    return false;

  }
  }




    </script>
<style>



 img{
      float: left;
    }
 


</style>
<style>
.center
{
margin-left: auto;
margin-right: auto;
text-align:center;
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
               <a href="home.php" style=" color: blue; ">Home</a> </span>

</div>
   
<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
        
      <span  style="text-align:center; " >
     
   <li><a href="registration.php" style="text-align:center; color: blue; "><h2>Need an Account?</h2></a></li>
   <li><a href="login.php" style="text-align:center; color: blue; "><h2>Login </h2></a></li>
  

   </a></li>
        
   </span>
    </ul>
  </div>


   

      
 <span style="text-align:center;">
 <div class="col-6 col-s-9">
   

   

   
    </td>
    <td colspan="2" rowspan="2">
        <fieldset>
            <legend><b>
                    <h2>CHANGE PASSWORD</h2>
                </b></legend>
            <form action="" method="post">
                <table width=40%>
                    <tr>
                        <td><label for="" style="color:blue;">Current Password</td></label>
                        <td>: <input type="text" name="cpass" id=""></td>
                        <span class="error"><?php echo $cpassErr; ?></span>
                    </tr>
                    <tr>
                        <td><label for="" style="color: blueviolet;">New Password</label></td>
                        <td>: <input type="text" name="npass" id=""></td>
                        <span class="error"><?php echo $npassErr; ?></span>
                    </tr>
                    <tr>
                        <td><label for="" style="color: blueviolet;">Retype New Password</label></td>
                        <td>: <input type="text" name="rpass" id=""></td>
                        <span class="error"><?php echo $rpassErr; ?></span>
                    </tr>
                    <tr>
                        <td colspan='2'>
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit">
                        </td>
                    </tr>
                </table>
            </form>

        </fieldset>
    </td>
    </tr>
    <tr>
        <td height="390px">
                    <?php
    } else {
        header('location: login.php');
    }
        ?>

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




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

<div class="header" >

 

  <h1 style="text-align: center;">SHOP MANAGEMENT SYSTEM</h1>

</div>
   
<div class="row">
  <div class="col-3 col-s-3 menu">
    <ul>
        
      <span style="text-align:center">
     
   <li><a href="registration.php"><h2>Create New Account</h2></a></li>
   </span>
    </ul>
  </div>


   

      
 <span style="text-align:center;">
 <div class="col-6 col-s-9">

<?php


require_once('Controller/loginValidation.php');
?>
    <h1>LOG IN</h1>
  

      
       <form  method="post" action="">
    
       
         <span style="text-align:center;">
              <form>
            <div class="inputBox">
                <label>Username</label>
                <input type="text" name="uname" value="<?php if (isset($_COOKIE["uname"])) {
                                                                echo $_COOKIE["uname"];
                                                            } ?>"><br><br>

                
            </div>
            <div class="inputBox">
                  <label>Password</label>
                    <input type="password" name="pass" value="<?php if (isset($_COOKIE["pass"])) {
                                                                echo $_COOKIE["pass"];
                                                            } ?>">
                  
                </div><br>
                <input type="checkbox" name="remember" id="">Remember me
            
        </form>
    
           
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Sign In">
                </td><br><br>

            </tr>
            <tr>
            
                  
                 <br>  <br> <a href="Forgotten_password.php"> Forgot Password?</a>
                </td>
            </tr>
        </table>
    
</form>
</span>
    
<br><a href='addAccount.php'>Dont have an account?</a><br> 
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

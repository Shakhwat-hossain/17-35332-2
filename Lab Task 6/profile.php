
<?
session_start();
?>
<?php
require_once('Controller/loginValidation.php');
$cookie_name = $cookie_pass = "";
if (isset($_POST['submit'])) {


    if (empty($_POST['uname']) || empty($_POST['password']))
     {
        echo "Field cannot be empty";

    } else {

          $data['uname'] = $_POST['uname'];
        $data['password'] = $_POST['password'];

        $bool = 0;
         $result = login($data);


        if (!empty($result)) {
            if ($_POST['uname'] == $result[0]['Username'] && $_POST['password'] == $result[0]['Password']) {
                $bool = 1;
                $_SESSION['role'] = $result[0]['Role'];
                $_SESSION['name'] = $result[0]['Name'];
                $_SESSION['email'] = $result[0]['Email'];
                $_SESSION['username'] = $result[0]['Username'];
                $_SESSION['password'] = $result[0]['Password'];
                $_SESSION['gender'] = $result[0]['Gender'];
                $_SESSION['dob'] = $result[0]['DOB'];
                $_SESSION['photo'] = $result[0]['Photo'];
            }
        if ($bool = 1) {
            $_SESSION['flag'] = true;
   
            if (!empty($_POST['remember'])) {
                setcookie("uname", $_POST['username'], time() +300);
                setcookie("password", $_POST['password'], time() +300);
            }
            $_SESSION['uname'] = $result[0]['Username'];
            header('location:dashboard.php');
        } else {
            echo "Not a vaild user";
        }
    }
}
}


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
           

 <form method="post" action="">

  
   

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
                    Date of Birth : value="<?php echo $_SESSION['dob']; ?>"
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
          
<span style="font-size: 20px;"> <a href="Editprofile.php">Edit</a></span><br>
          
<span style="font-size: 20px;"> <a href="change_password.php">Change Password</a></span>


</form>
    

 
</div>

<div class="footer" style="border-style: groove; color:blueviolet;">
  <p>Copyright © 2021</p>
</div>

</body>
</html>

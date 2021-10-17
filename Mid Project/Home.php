<?php
session_start();
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

<div class="header" style=" color:blueviolet;">


     <span style="color: darkviolet; text-align:center; font-style: Arial;"><b> <h1>SHOP MANAGEMENT SYSTEM</h1></b></span>


</div>
<div class="row">
  <div class="column side" style="background-color:lightskyblue; font-size: 18px; text-align: left; padding-left: 80px;  width: 25%; ">
    
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">


    <hr>
    <br> <span style="text-align: center; padding-left: 40px; padding-bottom: 20px;"> <a href='createaccount.php'><h2>SIGN UP</a></span><br> 


    <span style="text-align:center; "> <a href="createaccount.php"><h2>Create New Account</h2></a></span>

   <span style="text-align:center; "><h2> <a href="Login.php">Login</a></h2>  </span>
   

</form>
     
      
    
  </div>

  
 
  <div class="columnr middle" style="background-color:deepskyblue; font-size: 130px; text-align: left; padding-left: 350px; width: 75%; " >

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           
<?php


$cookie_name = $cookie_pass = "";
if (isset($_POST['submit'])) {

    $inp = file_get_contents('data.json');
    $temp = json_decode($inp, true);

    if (!empty($_COOKIE["$cookie_name"])) {
        echo "$_COOKIE[$cookie_name]";
    }

    if (empty($_POST['uname']) || empty($_POST['pass']))
     {
        echo "field cannot be empty";

    } else {

        $bool = 0;


        foreach ($temp as $key1 => $value1)
         {
            if ($temp[$key1]["username"] == $_POST['uname'] and $temp[$key1]["password"] == $_POST['pass']) {
                $bool = 1;
                $_SESSION['name'] = $temp[$key1]["name"];
                $_SESSION['email'] = $temp[$key1]["e-mail"];
                $_SESSION['gender'] = $temp[$key1]["gender"];
                $_SESSION['password'] = $temp[$key1]["password"];
            }
        }
        if ($bool == 1) {
            $_SESSION['flag'] = true;
            $uname = $_POST['uname'];
            $_SESSION['uname'] = $uname;
            if (!empty($_POST['remember'])) {
                setcookie("user", $_POST['uname'], time() +1000);
                setcookie("pass", $_POST['pass'], time() +1000);
            }
            header('location:Login.php');
        } else {
            echo "invaild user";
        }
    }
}


?>
 <form method="post" action="">


<html>
<head>
 <link rel="stylesheet" type="text/css" href="style.css">
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
    <div style="font-size: 40px; color:white; font-weight: 100px; ">
   <br>
   <br><b>
   <h2 id="date"></h2>
   <h3 id="time"></h3></b>
</div>
 </body>
</html>

</form>
    

 
</div>

<div class="footer" style="border-style: groove; color:blueviolet;">
  <p>Copyright © 2021</p>
</div>

</body>
</html>

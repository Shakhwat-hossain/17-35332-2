 


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


     <span style="color: darkviolet; text-align:center; font-style: Arial;"><b> <h1>SHOP MANAGEMENT SYSTEM</h1></span>


</div>
<div class="row">
  <div class="column side" style="background-color:lightskyblue; color: skyblue; font-size: 18px; text-align: center; padding-left: 80px;  width: 25%; ">
    
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">


      <hr>

<br>
<span style="color:skyblue;"><a href="Login.php"> <h1>Login</h1> </a></span> 
   <a href="createaccount.php"><h2>Create New Account</h2></a>

   
    
   

</form>
     
      
    
  </div>

  
 
  <div class="columnr middle" style="background-color:deepskyblue; color:blue; font-size: 30px; text-align: left; padding-left: 350px; width: 75%; " >

  
           



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

<?php


if(isset($_POST['submit'])) {
    $inp = file_get_contents('data.json');
    $temp = json_decode($inp, true);

    if (empty($_POST['e-mail']))
     {
        echo "Email is required";
    } else {
        $bool = 0;
        foreach ($temp as $key1 => $value1)
         {
            if ($temp[$key1]["e-mail"] == $_POST['e-mail']) {
                $bool = 1;
            }
        }
        if ($bool == 1) {
            echo "Email exits in database, a code will be sent to you";
        } else {
            echo "This is not a registered e-mail";
        }
    }
}
?>


     
               
                   
                        <legend><b>FORGOT PASSWORD</b></legend>
                       
                        <label>E-mail </label>
                     <input type="text" name = "e-mail" class="form-control" /><br />
                     
                      <input type="submit" align="center" name="submit" value="Submit" <span class="forms"></span> 
                       
            
                 
          
               


                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;

                     }  
                     ?>  

           </div>  
           <br />  
      </body>  
          


</form>
    

 
</div>

<div class="footer" style="border-style: groove; color:blueviolet;">
  <p>Copyright © 2021</p>
</div>

</body>
</html>

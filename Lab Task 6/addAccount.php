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
      <h2>REGISTRATION</h2>
</div>
<div class="header middle" style=" color:blueviolet;">
   


     <span style="color: darkviolet; text-align:center; font-style: Arial;"><b> <h1>SHOP MANAGEMENT SYSTEM</h1></b></span>
      <span style="text-align:right;"> <a href="profile.php">Profile</a> </span>

     <span style="text-align:right;"> <a href="logout.php">Logout</a> </span>
      

</div>
<div class="row">
  <div class="column side" style="background-color:lightskyblue; font-size: 18px; text-align: left; padding-left: 80px;  width: 25%; ">
    
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
    <br> <br> 


    
    <span style="text-align:center; "> <a href=""><h2></h2></a></span>
  
   

</form>
     
      
    
  </div>

  
 
  <div class="columnr middle" style="background-color:deepskyblue;  text-align: left;  width: 75%; " >

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  


<?php 

      
 $name =  "" ;
 $nameErr='';
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }else{
    $name = test_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z-' ]*$/",$name))  {
      $nameErr = "Only letters and white space allowed";
      $name="";

    }
     
     else{
          
          if(str_word_count($_POST["name"])<2)
     {
          $nameErr= "<label class='text-danger'>    [Name must contain minimum 2 words]</label>";
          $name="";

     }
     // check if name only contains letters and whitespace
     }
}

      if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["uname"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["pass"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["Cpass"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
      else if(empty($_POST["dob"]))  
      {  
           $error = "<label class='text-danger'>Date of Birth is required</label>";  
      } 
       
      else  
      {  
           if(file_exists('sellerdata.json'))  
           {  
                $current_data = file_get_contents('sellerdata.json');  
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
                if(file_put_contents('sellerdata.json', $final_data))  
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
            <?php 
        include "nav2.php";

     ?>
   
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Append Data </h3><br />                 
                <form action="Controller/createAccount.php" method="POST" enctype="multipart/form-data">
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     if(isset($nameErr))  
                     {  
                          echo $nameErr;  
                     }
                     ?> 
                   
                     <br />  
                     <label for="role">Role</label>  
                     <input type="text" name="role" id="role" required="role" class="form-control" />
                     <label for="name">Name</label>  
                     <input type="text" name="name" id="name" required="name" class="form-control" /> 
                     <span class="error">* <?php echo $nameErr;?></span><br />

                     <label for="email">E-mail</label>
                     <input type="text" name = "email" id="email" class="form-control" /><br />
                     <label for="username">User Name</label>
                     <input type="text" name = "uname"  id="uname" class="form-control" /><br />
                     <label for="password">Password</label>
                     <input type="password" name = "pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" /><br />
                     <label for="password">Confirm Password</label>
                     <input type="password" name = "pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" /><br />

                    <fieldset>
                    <legend for="gender">Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>

                     <legend for="dob">Date of Birth:</legend>
                     <input type="date" name="dob" id="dob"> <br><br>

                     <input type="file" name="photo"><br><br>
                    </fieldset> 
                     
                     <input type="submit" name="createAccount" value="Submit">      


                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;

                     }  
                     ?>  

                </form>  
                

           </div>  
           <br />  
      </body>  
 </html>  
    

 
</div>

<div class="footer" style="border-style: groove; color:blueviolet;">
  <p>Copyright © 2021</p>
</div>

</body>
</html>

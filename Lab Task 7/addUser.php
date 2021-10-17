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
      	
   <li><a href="dashboard.php" style="text-align:center; color: blue; "> <h2> Dashboard </h2> 
   <li><a href="SearchUser.php" style="text-align:center; color: blue; "><h2> Search Profiles </h2></a></li>
   <li><a href="showAllUsers.php" style="text-align:center; color: blue; "> <h2> Show all Profiles </h2>
   </a></li>
        
   </span>
    </ul>
  </div>


   

      
 <span style="text-align:center;">
 <div class="col-6 col-s-9">

 
 
<?php 
   
 $name =  "" ;
 $nameErr='';
 $message = '';  
 $error = '';  
 if(isset($_POST["createProfile"]))  
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
    
     <br />  
     <form action=" Controller/createProfile.php"   enctype="multipart/form-data" method="POST"  >
           <div class="container" style="width:500px;">  
                     <?php   
                        if(isset($error))  
                     {  
                          echo $error;  
                     } 
                     if(isset($nameErr))  
                     {  
                          echo $nameErr;  
                     }
                     if(isset($emailErr))  
                     {  
                          echo $emailErr;  
                     }
                     ?>   
                     <label for="role">Role</label>  
                     <input type="text" name="role" id="role" required placeholder="Position" class="form-control" />
                     <label for="name">Name</label>  
                     <input type="text" name="name" id="name" required placeholder="First name and last name" class="form-control" /> 
                     <span class="error">* <?php echo $nameErr;?></span>

                     <label for="email">E-mail</label>
                     <input type="text" name = "email" id="email" required placeholder="........@gmail.com" class="form-control" />
                     <label for="username">User Name</label>
                     <input type="text" name = "uname"  id="uname" class="form-control" />
                     <label for="password">Password</label>
                     <input type="password" name = "pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" />
                     <label for="password">Confirm Password</label>
                     <input type="password" name = "Cpass"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" />

                    <fieldset>
                    <legend for="gender">Gender</legend>
                    <input type="radio" id="male" required="gender" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" required="gender" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" required="gender" name="gender" value="other">
                     <label for="other">Other</label><br>

                     <legend for="dob">Date of Birth:</legend>
                     <input type="date" name="dob" id="dob"> <br><br>
                     <label for="photo">Upload photo:</label>
                     <input type="file" name="photo"><br><br>
                    </fieldset> 
                     
                     <input type="submit" name="createProfile" value="Submit">      



 
  <input type="reset"> 
</div>
</form> 

</body>
</html>

</div>
</body>
</html>
  
</span>
  </div>
  </span>
 
  </div>
</div>

<div class="footer">
  <p>Copyright © 2021.</p>
</div>


</body>
</html>

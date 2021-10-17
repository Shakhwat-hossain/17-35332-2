
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
    <?php 
        include "nav.php";

     ?>
     <br />  
     <form action=" Controller/createProfile.php"   enctype="multipart/form-data" method="POST"  >
           <div class="container" style="width:500px;">  
                <h3 align="">Append Data </h3><br />  
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
                   
                     <br />  
                     <label for="role">Role</label>  
                     <input type="text" name="role" id="role" required placeholder="Position" class="form-control" />
                     <label for="name">Name</label>  
                     <input type="text" name="name" id="name" required placeholder="First name and last name" class="form-control" /> 
                     <span class="error">* <?php echo $nameErr;?></span><br />

                     <label for="email">E-mail</label>
                     <input type="text" name = "email" id="email" required placeholder="........@gmail.com" class="form-control" /><br />
                     <label for="username">User Name</label>
                     <input type="text" name = "uname"  id="uname" class="form-control" /><br />
                     <label for="password">Password</label>
                     <input type="password" name = "pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" /><br />
                     <label for="password">Confirm Password</label>
                     <input type="password" name = "Cpass"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" /><br />

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
                     <label for="photo">Photo:</label>
                     <input type="file" name="photo"><br><br>
                    </fieldset> 
                     
                     <input type="submit" name="createProfile" value="Submit">      



 
  <input type="reset"> 
</div>
</form> 

</body>
</html>

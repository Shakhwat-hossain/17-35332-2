<?php 

session_start();

       
 $name =  "" ;
 $nameErr='';
 $message = '';  
 $error = ''; 
 $passErr=''; 
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }else{
    $name = test_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z-' ]*$/",$name))  {
      $nameErr = "[Only letters and white space allowed for Name]";
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

       if (empty($_POST["email"])) {
       $error = "<label class='text-danger'>Enter an e-mail</label>";
      } else {
       $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "[Invalid email format!]";
      $email="";
      $name="";
       } 
      if(empty($_POST["uname"]))  
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
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
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
                if(file_put_contents('data.json', $final_data))  
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
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
           <div class="container" style="width:500px;">  
                <h3 align="">Append Data to JSON File</h3><br />                 
                <form method="post">  
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
                     <label>Name</label>  
                     <input type="text" name="name" required="name" class="form-control" /> 
                     <span class="error">* <?php echo $nameErr;?></span><br />

                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" /><br />
                     <label>User Name</label>
                     <input type="text" name = "uname" class="form-control" /><br />
                     <label>Password</label>
                     <input type="password" name = "pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" /><br />
                     <label>Confirm Password</label>
                     <input type="password" name = "Cpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" /><br />

                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>

                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob" onfocus="this.value=''" required   min="1953-01-01" max="1998-12-31"> <br><br>
                    </fieldset> 
                     
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /><br />      


                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;

                     }  
                     ?>  

                </form>  
                <br><span style="text-align: center; font-size: 20px;"> <a href='Login.php'>LOGIN</a></span><br> 

           </div>  
           <br />  
      </body>  
 </html>  
<?php
include('header.php');
?>
  <?php
     


?>

<?php

$curpass= $pass= $repass="";
$curpassErr= $passErr =$repassErr="";
$currentpass = $_SESSION['password']; 
if(isset($_POST["submit"]))  
 {  


  if (empty($_POST["curpass"])) {
    $curpassErr ="Current password is required";




  }
  else{
    $curpass= test_input ($_POST["curpass"]);

    $pass= test_input ($_POST["pass"]);

    $repass= test_input ($_POST["repass"]);

    if($curpass != $currentpass)
    {
        $curpassErr= "Current password DO NOT MATCH!";
    }
    else{
      if(empty($_POST["pass"]))
      {
        $passErr="<label class='text-danger'>Enter a password</label><br>";
      }
      else 
      {
        if (empty($_POST["pass"]))
          
        $pass="<label class='text-danger'>Enter a password</label><br>";
      
      else if($pass == $curpass)
      {
        $passErr ="Password must be different from previous one";
        $pass="";
      }
      else{
        if(empty($_POST["repass"]))
        {
          $repassErr="retype new password again";
          $pass="";
        }
        else if($repass != $pass)
        {
          $repassErr="Password does not match";
          $pass="";
          $repass="";
        }
        else if($repass == $pass)
        {
          $repassErr="Password changed successfully";
          $pass="";
          $repass="";
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
           <div class="container" style="width:500px;">  
                <h3 align="">Reset Password</h3><br />                 
                <form method="post">  
                    <!--Current Password : <?php echo $_SESSION['password']; ?>-->
                     <br />  
                     <label>Current Password</label>
                     <input type="Password" name="curpass" class="form-control" value="<?php echo $_SESSION['password'];?>"><span class="error">* <?php echo $curpassErr;?></span><br><br>
                    
                     <label>New Password</label>
                     <input type="Password" name="pass"  class="form-control" value="<?php echo $pass;?>"><span class="error">* <?php echo $passErr;?></span><br><br>

                     <label>Re-Type New Password</label>
                     <input type="Password" name="repass"  class="form-control" value="<?php echo $repass;?>"><span class="error">* <?php echo $repassErr;?></span><br><br>
                    
                
                  
                     
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /><br />                      
                    
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  
  

  </div>
 
</div>



</body>
</html>
<?php
include('footer.php');
?>

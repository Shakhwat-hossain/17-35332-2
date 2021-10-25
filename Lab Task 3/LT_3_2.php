<?php

$curpass= $newpass= $repass="";
$curpassErr= $newpassErr =$repassErr="";
$currentpass ="1111";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["curpass"])) {
    $curpassErr ="Current password is required";




  }
  else{
    $curpass= test_input ($_POST["curpass"]);

    $newpass= test_input ($_POST["newpass"]);

    $repass= test_input ($_POST["repass"]);

    if($curpass != $currentpass)
    {
        $curpassErr= "Current password DO NOT MATCH!";
    }
    else{
      if(empty($_POST["newpass"]))
      {
        $newpassErr="<label class='text-danger'>Enter a password</label><br>";
      }
      else 
      {
        if (empty($_POST["newpass"]))
          
        $newpass="<label class='text-danger'>Enter a password</label><br>";
      
      else if($newpass == $curpass)
      {
        $newpassErr ="Password must be different from previous one";
        $newpass="";
      }
      else{
        if(empty($_POST["repass"]))
        {
          $repassErr="retype new password again";
          $newpass="";
        }
        else if($repass != $newpass)
        {
          $repassErr="Password does not match";
          $newpass="";
          $repass="";
        }
        else if($repass == $newpass)
        {
          $repassErr="Password setting completed";
          $newpass="";
          $repass="";
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
                <h3 align="">Append Data to JSON File</h3><br />                 
                <form method="post">  
                     
                     <br />  
                     <label>Current Password</label>
                     <input type="Password" name="curpass" class="form-control" value="<?php echo $curpass;?>"><span class="error">* <?php echo $curpassErr;?></span><br><br>
                    
                     <label>New Password</label>
                     <input type="Password" name="newpass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" value="<?php echo $newpass;?>"><span class="error">* <?php echo $newpassErr;?></span><br><br>

                     <label>Re-Type New Password</label>
                     <input type="Password" name="repass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" value="<?php echo $repass;?>"><span class="error">* <?php echo $repassErr;?></span><br><br>
                    
                
                  
                     
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" /><br />                      
                    
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  
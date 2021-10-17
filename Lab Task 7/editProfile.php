<?php 

require_once 'Controller/userInfo.php';
$profile = fetchProfile($_GET['id']);

 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;}
   
 ?>
<!DOCTYPE html>
<html>
<head>
     <title></title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           
           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

 <form action="Controller/updateProfile.php" method="POST" enctype="multipart/form-data">
  <div class="container" style="width:500px;">  
    <br><br>
     <h3 align="">Update Data </h3>
                                        
    <label for="role">Position</label>
 <input value="<?php echo $profile['Role']?>"type="text" id="role" name="role" class="form-control" />
  
  <br>
   <label for="name">Name</label>
   <input  value="<?php echo $profile['Name']?>" type="text" id="name" name="name" class="form-control" />
  <br>


     <label for="email">Email</label>
    <input  value="<?php echo $profile['Email']?>" type="text" name="email" class="form-control" />
  <br>

     <label for="uname">Username</label>
   <input  value="<?php echo $profile['Username']?>" type="text" name="uname" class="form-control" />
  <br>



    <label for="pass">Password</label>
   <input  value="<?php echo $profile['Password']?>" type="text" name="pass" class="form-control" />
  <br>


 
  <fieldset>
                    <legend for="gender">Gender:</legend>
                    <input type="radio" id="male" required="gender" name="gender" value="male"<?php if($profile['Gender']== "male"){
                      echo "checked";

                    } ?>>
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" required="gender" name="gender" value="female"<?php if($profile['Gender']== "female"){
                      echo "checked";

                    } ?>>
                     <label for="female">Female</label>
                     <input type="radio" id="other" required="gender" name="gender" value="other"<?php if($profile['Gender']== "other"){
                      echo "checked";

                    } ?>>
                     <label for="other">Other</label><br>
   

  </fieldset> 

                     <legend for="dob">Date of Birth:</legend>
                     <input value="<?php echo $profile['DOB']?>" type="date" name="dob" id="dob"> <br><br>

   
  <label for="photo"></label> <img width="100px" src="Photos/<?php echo $profile['photo'] ?>"> 
 
  <input  type="file" name="photo" src="Photos/<?php echo $profile['photo']?>">
  <br>
<br>
 
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">

 <div>
 
   
 </div>

  <input type="submit" name="updateProfile" value="Update">
  <input type="reset">
</div>
</form> 

</body>
</html>


<!DOCTYPE html>
<html>
<head>
     <title></title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src='js/validator.js'></script>
           <script>

</script>
</head>
<body>

<form name="myForm" class="bg-light" action="Controller/createProfile.php" enctype="multipart/form-data" method="POST" onsubmit="return validate()">
           <div class="container" style="width:500px;">  <br>
               <br> <span ><h3 align="">Append Data </h3> </span><br>
                     <div class="form-group">
                         <label>Role</label>
                      <select name="role" class="form-control" id="role" required>
                      <option value="" onblur="positionCheck()" onkeyup="positionCheck()" >Select</option> 
                      <option value="Admin" onblur="positionCheck()" onkeyup="positionCheck()" >Admin</option>
                      <option value="Manager" onblur="positionCheck()" onkeyup="positionCheck()" >Manager</option>
                      <option value="Seller" onblur="positionCheck()" onkeyup="positionCheck()" >Seller</option>
                      <option value="Executive" onblur="positionCheck()" onkeyup="positionCheck()" >Executive</option>
                      </select> <span id="msg6"> </span></div>

     
                    
                     <div class="form-group" onsubmit="return validate()">
                     <label for="name">Name</label>  
                     <input type="text" name="name" id="name"    placeholder="First name and last name" class="form-control" required="" onkeyup="nameCheck()" onblur="nameCheck()" /> 
                        <span id="msg1"> </span>
                     <span id="msg" style="color: red;"></span> </div>
                    

                     <div class="form-group">
 
                     <label for="email">E-mail</label>
                     <input type="text" name = "email" id="email" required="email" placeholder="........@gmail.com" class="form-control" onkeyup="emailCheck()" onblur="emailCheck()" />
                     <span id="msg2"> </span></div>

                     <div class="form-group">
                     <label for="username">User Name</label>
                     <input type="text" name = "uname"  id="uname" required="uname" class="form-control" onkeyup="unameCheck()" onblur="unameCheck()" />
                     <span id="msg3"> </span> </div>

                     <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name = "pass" id="pass" required="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" onkeyup="passCheck()" onblur="passCheck()" class="form-control" />
                       <span id="msg4"> </span></div>

                       <div class="form-group">
                     <label for="password">Confirm Password</label>
                     <input type="password" name = "Cpass" id="Cpass" required="pass"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" onkeyup="cPassCheck()" onblur="cPassCheck()" />
                     <span id="msg5"> </span></div>

                     <fieldset>
                     <legend for="gender">Gender</legend>
                     <input type="radio" id="male" required="gender" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" required="gender" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" required="gender" name="gender" value="other">
                     <label for="other">Other</label><br><br>

                      <div class="form-group">
                     <legend for="dob">Date of Birth:</legend>
                     <input type="date" required="dob" name="dob" id="dob"> <br><br>
                      <span id="dobErr" class="text-danger font-weight-bold"></span></div>
                    
                     <label for="photo">Photo:</label>
                     <input type="file" required="photo" name="photo"><br><br>
                     </fieldset> 
                     
                     <input type="submit" name="createProfile" value="Submit"> 
                     <span id="msg" style="color: red;"></span> 
                       <?php   
      if(isset($message))  
      {  
           echo "<h3>$message</h3>";  
      }  
      ?>   



 
  <input type="reset"> 
</div>
</form> 
<script src="js/validator.js"></script>
</body>
</html>


<!DOCTYPE HTML>  
<html>
<head>
<style>
fieldset{
   
  padding:10px;
  width:250px;
  line-height:1.8;
}
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
//define variables and set to empty values
 $nameErr = $emailErr = $genderErr = $dgErr= $dErr=  $degreeErr= $dgrErr= $bloodgroupErr= $birthdayErr = "";
 $name = $email = $gender = $comment = $d= $degree= $bloodgroup= $dgr= $dg= $birthday = "" ;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } if(str_word_count($_POST["name"])<=2)
  {
    $nameErr= "Min 2 words";
  } 
  else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
      $name="";

    }
    else{

    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $email="";
      $name="";
    }
  }
    
  if (empty($_POST["birthday"])) {
    $birthday = "";
  } else {
    $birthday = test_input($_POST["birthday"]);
   
   
  }

 

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  
  if (empty($_POST["degree"])) {
    $degreeErr = "
    Minimum 2 Degrees required";
  }
  else
  {
    $degree = test_input($_POST["degree"]);
  }  



  if (empty($_POST["dgr"])) {
    $dgrErr = "Degree is required";
  }
  else
  {
    $dgr = test_input($_POST["dgr"]);
  }  

  if (empty($_POST["dg"])) {
    $dgErr = "Degree is required";
  }
  else
  {
    $dg = test_input($_POST["dg"]);
  } 

  if (empty($_POST["d"])) {
    $dErr = "Degree is required";
  }
  else
  {
    $d = test_input($_POST["d"]);
  }   




  if (($_POST['bloodgroup'])==""){
    $bloodgroupErr="Blood group is requied";
  } else {
    $bloodgroupErr="";
    $bloodgroup=$_POST['bloodgroup'];
  }




}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<fieldset>
<legend>NAME</legend> 
   <input type="text" name="name" required onfocus="this.value=''" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
</fieldset>
<fieldset>
  <legend>EMAIL</legend>
 <input type="text" name="email" onfocus="this.value=''" placeholder="....@gmail.com" required value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br></fieldset>
  <fieldset>
    <legend>DATE OF BIRTH</legend>
   <input type="date" name="birthday" onfocus="this.value=''" required   min="1953-01-01" max="1998-12-31"  value="<?php echo $birthday;?>">
  <span class="error"><?php echo $birthdayErr;?></span>
  <br><br></fieldset>

  <fieldset>
    <legend>GENDER</legend>
  <input type="radio" name="gender" required <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Other") echo "checked";?> value="Other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br></fieldset>
  <fieldset>
    <legend>DEGREE</legend>
    <div input type="checkbox" required name="degree">  
 <label> 
  <input type="checkbox" name="dgr"  multiple required  <?php if (isset($dgr) && $dgr=="SSC") echo "checked";?> value= "SSC">SSC </label> 

 <label> 
  <input type="checkbox" name="dg" multiple required <?php if (isset($dg) && $dg=="HSC")  echo "checked";?> value="HSC">HSC </label>
 <label>
  <input type="checkbox" name="degree" multiple  <?php if (isset($degree) && $degree=="BSc")  echo "checked";?> value="BSc">BSc </label>

  <label>  <input type="checkbox" name="d" multiple <?php if (isset($d) && $d=="MSc")  echo "checked";?> value="MSc">MSc </label>
  <span class="error">* <?php echo $degreeErr;?></span> </div>
  <br><br></fieldset>
  <fieldset>
    <legend>BLOOD GROUP</legend>
    <label for="bloodgroup"> Blood group:</label>
  <select id="bloodgroup" name="bloodgroup">
    <option value=""></option>
    <option value="A+" <?php if($bloodgroup == 'A+'){ echo ' selected="selected"'; } ?> >A+</option>
       <option value="A-" <?php if($bloodgroup  == 'A-'){ echo ' selected="selected"'; } ?> >A-</option>
    <option value="B+" <?php if($bloodgroup  == 'B+'){ echo ' selected="selected"'; } ?> >B+</option>
    <option value="B-" <?php if($bloodgroup  == 'B-'){ echo ' selected="selected"'; } ?> >B-</option>
    <option value="O+" <?php if($bloodgroup == 'O+'){ echo ' selected="selected"'; } ?> >O+</option>
    <option value="O-" <?php if($bloodgroup  == 'O-'){ echo ' selected="selected"'; } ?> >O-</option>
    <option value="AB+" <?php if($bloodgroup  == 'AB+'){ echo ' selected="selected"'; } ?> >AB+</option>
    <option value="AB-" <?php if($bloodgroup  == 'AB-'){ echo ' selected="selected"'; } ?> >AB-</option>
  </select> 
  <span class="error">* <?php echo $bloodgroupErr;?></span>
  <br> <br>
  </fieldset>
  <input type="submit" name="submit"  value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo  "<b>NAME:</b>"  .$name;  
echo "<br>";
echo  "<b>EMAIL:</b>"  .$email;
echo "<br>";
echo  "<b>DATE OF BIRTH:</b>"  .$birthday;
echo "<br>";
echo "<b>GENDER:</b>" .$gender;
echo "<br>";

echo "<b>DEGREES: </b>";
echo " $dgr,";
echo "<br>";
echo " $dg, ";
echo "<br>";
echo " $degree, ";
echo "<br>";
echo " $d ";
echo "<br>";
echo "<b> BLOOD GROUP:</b>" .$bloodgroup;




?>


</body>
</html>

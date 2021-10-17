<?php
session_start();
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
  
<link rel="stylesheet" type="text/css" href="F.css">

<p></p>

<div class="header">

  <img src="x_company.png" alt="x_company.png" style="width:100px;height:50px; margin-top: -15px;   ">
     <li>  <a href="A_public_home.php">Home   </li>
    

</div>
<div class="row">
  <div class="column side" style="background-color:white; font-size: 18px; text-align: left; padding-left: 80px;  width: 25%; ">
    
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">


      
    
    <hr>

<br>
   <a href="Ifnotregistered.php"><h2>Create New Account</h2></a>
   

</form>
     
      
    
  </div>

  
 
  <div class="columnr middle" style="background-color:white; text-align: left; padding-left: 300px; width: 75%; " >

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           
<?php


$cookie_name = $cookie_pass = "";
if (isset($_POST['submit'])) {

    $inp = file_get_contents('data.json');
    $temp = json_decode($inp, true);

    if (!empty($_COOKIE["$cookie_name"])) {
        echo "$_COOKIE[$cookie_name]";
    }

    if (empty($_POST['uname']) || empty($_POST['pass']))
     {
        echo "field cannot be empty";

    } else {

        $bool = 0;


        foreach ($temp as $key1 => $value1)
         {
            if ($temp[$key1]["username"] == $_POST['uname'] and $temp[$key1]["password"] == $_POST['pass']) {
                $bool = 1;
                $_SESSION['name'] = $temp[$key1]["name"];
                $_SESSION['email'] = $temp[$key1]["e-mail"];
                $_SESSION['gender'] = $temp[$key1]["gender"];
                $_SESSION['password'] = $temp[$key1]["password"];
            }
        }
        if ($bool == 1) {
            $_SESSION['flag'] = true;
            $uname = $_POST['uname'];
            $_SESSION['uname'] = $uname;
            if (!empty($_POST['remember'])) {
                setcookie("user", $_POST['uname'], time() +1000*30);
                setcookie("pass", $_POST['pass'], time() +1000*30);
            }
            header('location:dashboard.php');
        } else {
            echo "invaild user";
        }
    }
}


?>
       
       <form method="post" action="">
    <fieldset style="width:400px">
        <legend><b>LOGIN</b></legend>
        <table>
            <tr>
                <td>User Name:</td>
                <td><input type="text" name="uname" value="<?php if (isset($_COOKIE["user"])) {
                                                                echo $_COOKIE["user"];
                                                            } ?>"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="Password" name="pass" value="<?php if (isset($_COOKIE["pass"])) {
                                                                echo $_COOKIE["pass"];
                                                            } ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="remember" id="">Remember me
                </td>
            </tr>
            <tr>
                <td colspan="2">

                </td>
            </tr>
            <tr>
                <td>
                <br>
                    <input type="submit" name="submit" value="Log In">
                    <a href="D_Forgot_pass.php"> Forgot Password?</a>
                </td>
            </tr>
        </table>
    </fieldset>
</form>
    
<br><a href='Ifnotregistered.php'>Dont have an account?</a><br> 
 
</div>

<div class="footer" style="border-style: groove;">
  <p>Copyright © 2021</p>
</div>

</body>
</html>

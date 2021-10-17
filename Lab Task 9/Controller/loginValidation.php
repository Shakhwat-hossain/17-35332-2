<?php

session_start();
require_once 'Model/db_layer.php';
$cookie_name = $cookie_pass = "";
if (isset($_POST['submit'])) {

  
  

    if (empty($_POST['uname']) || empty($_POST['pass']))
     {
        echo "Field cannot be empty";

    } else {

          $data['uname'] = $_POST['uname'];
          $data['pass'] = $_POST['pass'];

        $bool = 0;
         $result = login($data);



        if (!empty($result)) {
            if ($_POST['uname'] == $result[0]['Username'] && $_POST['pass'] == $result[0]['Password']) 
                $bool = 1;
            $_SESSION['role'] = $result[0]['Role'];
                $_SESSION['name'] = $result[0]['Name'];
                $_SESSION['email'] = $result[0]['Email'];
                $_SESSION['uname'] = $result[0]['Username'];
                $_SESSION['pass'] = $result[0]['Password'];
                $_SESSION['gender'] = $result[0]['Gender'];
                $_SESSION['dob'] = $result[0]['DOB'];
                $_SESSION['photo'] = $result[0]['Photo'];
            
        if ($bool = 1) {
            $_SESSION['flag'] = true;
            if (!empty($_POST['remember'])) {
                setcookie("uname", $_POST['uname'], time() +300);
                setcookie("pass", $_POST['pass'], time() +300);
            }else{
                setcookie("uname","");
                setcookie("pass","");
            }
   
                 $_SESSION['role'] = $result[0]['Role'];
                $_SESSION['name'] = $result[0]['Name'];
                $_SESSION['email'] = $result[0]['Email'];
                $_SESSION['uname'] = $result[0]['Username'];
                $_SESSION['pass'] = $result[0]['Password'];
                $_SESSION['gender'] = $result[0]['Gender'];
                $_SESSION['dob'] = $result[0]['DOB'];
                $_SESSION['photo'] = $result[0]['Photo'];
            header('location:dashboard.php');
        } 
    }
    else {
            echo "Not a vaild user";
        }
}

}
?>
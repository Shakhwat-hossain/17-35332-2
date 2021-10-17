<?php 

session_start();

if (!isset($_SESSION['flag'])) {
	unset($_SESSION['flag']);

	session_destroy();
	session_unset();

	header("location:Login.php");
	
}

else{
	header("location:Login.php");


}

 ?>
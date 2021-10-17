<?php  
require_once '../Model/db_layer.php';


if (isset($_POST['updateProfile'])) {
	$data['role'] = $_POST['role'];
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['uname'] = $_POST['uname'];
	$data['pass'] = $_POST['pass'];
	$data['gender'] = $_POST['gender'];
	$data['dob'] = $_POST['dob'];
	
	
	$data['photo'] = basename($_FILES["photo"]["name"]);

	$target_dir = "../Photos /";
	$target_file = $target_dir . basename($_FILES["photo"]["name"]);
	if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }


  if (updateProfile($_POST['id'], $data))  {
  	echo 'Successfully updated!!';
  	//redirect to 
  	header('Location: ../showProfile.php?id=' . $_POST["id"]);}
} else {
	echo 'You are not allowed to access this page.';
}


?>
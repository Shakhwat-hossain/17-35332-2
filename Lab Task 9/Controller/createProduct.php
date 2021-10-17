<?php  
require_once '../Model/db_layer.php';


if (isset($_POST['createProduct'])) {
	$data['productname'] = $_POST['productname'];
	$data['buyingprice'] = $_POST['buyingprice'];
	$data['sellingprice'] = $_POST['sellingprice'];
	$data['image'] = basename($_FILES["image"]["name"]);
  $target_dir = "../Picture/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>
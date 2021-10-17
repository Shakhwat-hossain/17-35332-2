<?php  
require_once '../Model/db_layer.php';


if (isset($_POST['updateProduct'])) {
	$data['productname'] = $_POST['productname'];
	$data['buyingprice'] = $_POST['buyingprice'];
	$data['sellingprice'] = $_POST['sellingprice'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../Picture /";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }


  if (updateProduct($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showProduct.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>
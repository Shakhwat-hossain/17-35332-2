<?php
session_start();
require_once '../Models/db_connect.php';
require_once '../Models/db_layer.php';


$response = array('success'=>false);
if (isset($_POST['foodName'])) {
	$Productname = trim($_POST['foodName']);
	$menuData = fetchProductByName($conn, $Productname);
	if (count($menuData)==0) {
		$response['Data'] = 'No data found..';
		$response['have'] = false; 
		$response['success'] = true; 
		echo json_encode($response);
	}else{
		$response['Data']=$menuData;
		$response['success']=true;
		$response['have'] = true; 
		echo json_encode($response);
	}
}
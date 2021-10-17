<?php 

require_once ('Model/db_layer.php');

function fetchAllProducts(){
	return showAllProducts();

}
function fetchProduct($id){
	return showProduct($id);

}

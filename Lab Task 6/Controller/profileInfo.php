<?php 

require_once ('Model/shop_db_layer.php');

function fetchAllProfiles(){
	return showAllProfiles();

}
function fetchProfile($id){
	return showProfile($id);

}

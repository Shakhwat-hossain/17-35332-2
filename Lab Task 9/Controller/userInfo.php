<?php 

require_once ('Model/db_layer.php');

function fetchAllProfiles(){
	return showAllProfiles();

}

function fetchProfile($id){
	return showProfile($id);

}

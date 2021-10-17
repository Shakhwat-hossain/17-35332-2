<?php 

require_once ('Model/db_layer.php');

function fetchmyProfile($uname){
	return showmyProfile($uname);

}

function fetchProfile($id){
	return showProfile($id);

}

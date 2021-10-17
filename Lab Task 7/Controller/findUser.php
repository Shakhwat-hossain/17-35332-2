<?php

require_once '../Model/db_layer.php';

if (isset($_POST['findUser'])) {
	
		

    try {
    	
    	$allSearchedUsers = searchProfile($_POST['uname']);
    	require_once '../showSearchedProfile.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}


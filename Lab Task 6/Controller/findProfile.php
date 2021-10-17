<?php

require_once '../Model/shop_db_layer.php';

if (isset($_POST['findProfile'])) {
	
		echo $_POST['uname'];

    try {
    	
    	$allsearchedProfile = searchProfile($_POST['uname']);
    	require_once '../showSearchedProfile.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}


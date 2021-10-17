
<?php 
    include "nav.php";

?>
<?php

require_once '../Model/db_layer.php';

if (isset($_POST['findProduct'])) {
	
		echo $_POST['productname'];

    try {
    	
    	$allSearchedProducts = searchProduct($_POST['productname']);
    	require_once '../showSearchedProduct.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}


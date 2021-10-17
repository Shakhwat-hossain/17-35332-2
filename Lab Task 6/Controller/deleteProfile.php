<?php 

require_once '../Model/shop_db_layer.php';

if (deleteProfile($_GET['id'])) {
    header('Location: ../showAllProfiles.php');
}

 ?>
<?php 

require_once '../Model/db_layer.php';

if (deleteProfile($_GET['id'])) {
    header('Location: ../showAllUsers.php');
}

 ?>
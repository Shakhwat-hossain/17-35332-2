<?php 

require_once '../Model/db_layer.php';

if (deleteProduct($_GET['id'])) {
    header('Location: ../showAllProducts.php');
}

 ?>
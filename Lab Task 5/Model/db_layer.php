<?php 

require_once 'db_connect.php';


function showAllProducts(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `products` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showProduct($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `products` where Id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchProduct($productname){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `products` WHERE Productname LIKE '%$productname%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addProduct($data){
	$conn = db_conn();
    $selectQuery = "INSERT into products (Productname, Buyingprice, Sellingprice, image)
VALUES (:productname, :buyingprice, :sellingprice, :image)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':productname' => $data['productname'],
        	':buyingprice' => $data['buyingprice'],
        	':sellingprice' => $data['sellingprice'],
        	':image' => $data['image']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateProduct($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE products set Productname = ?, Buyingprice = ?, Sellingprice = ? where Id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['productname'], $data['buyingprice'], $data['sellingprice'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProduct($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `products` WHERE `Id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
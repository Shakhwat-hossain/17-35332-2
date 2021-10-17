<?php 

require_once 'db_connect.php';

function addAccount($data){
    $conn = db_conn();
    $selectQuery = "INSERT into profile
       (Role, Name, Email, Username, Password, Gender, DOB, Photo)
VALUES (:role, :name, :email, :username, :password, :gender, :dob, :photo)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':role' => $data['role'],
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':username' => $data['uname'],
            ':password' => $data['pass'],
            ':gender' => $data['gender'],
            ':dob' => $data['dob'],
            ':photo' => $data['photo']
           
            
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function login($data)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM profile WHERE Username = :username AND  Password = :password";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt -> execute
        ([
            ':username' => $data ['uname'],
            ':password' => $data ['pass'],
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



function showAllProfiles(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `profile` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showmyProfile($uname){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `profile` where Username = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$uname]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function showProfile($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `profile` where Id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function updateProfile($id,$data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE profile SET Role = ?, Name = ?, Email = ?,Username=?, Password =?,Gender= ?, DOB=?, photo=? WHERE Id= ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
    $data ['role'],$data['name'],$data['email'], $data['uname'],$data['pass'], $data['gender'],$data['dob'], $data['photo'],$id
            
        ]);
          
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    } 
    $conn = null;
    return true;
}
function updatemyProfile($uname,$data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE profile SET Role = ?, Name = ?, Email = ?,Username=?, Password =?,Gender= ?, DOB=?, photo=? WHERE Username= ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
    $data ['role'],$data['name'],$data['email'], $data['uname'],$data['pass'], $data['gender'],$data['dob'], $data['photo'],$uname
            
        ]);
          
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    } 
    $conn = null;
    return true;
}
function deleteProfile($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `profile` WHERE `Id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function updatePassword ($data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE profile SET Password = :pass WHERE ID = :id";
    try
    {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':pass' => $data['pass'],
            ':id' => $data ['id'],
        ]);
        return true;    
    }
    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
}

function searchProfile($uname){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM profile WHERE Username LIKE '%$uname%'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function searchPassword($data){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM profile WHERE ID = :id";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':id' => $data ['id']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

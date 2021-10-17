<?php
require_once 'Model/db_layer.php';
$nameErr = $emailErr = $genderErr = $ddErr = $mmErr = $yyyyErr = $dobErr = $unameErr = $passErr = $cpassErr =  $positionErr = $idErr = "";

if (isset($_POST['change'])) {
    $data['name'] = $_POST['ename'];
    $data['email'] = $_POST['eemail'];
    $data['gender'] = $_POST['egender'];
    $data['dob'] = $_POST['dob'];
  
    if (!empty($_FILES["photo"]["name"])) {
        $data['photo'] = basename($_FILES["photo"]["name"]);
    } else {
        $data['photo'] = $_SESSION['photo'];
    }



    $target_dir = 'Photos/';
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($data['name'])) {
            $nameErr = "Name is required.";
        } else {
            if (!preg_match("/^[a-zA-Z-' ]*$/", $data['name'])) {
                $nameErr = "Only letters and white space allowed";
                $data['name'] = "";
            } else {
                if (str_word_count($data['name']) < 2) {
                    $nameErr = "Name must contain atleast 2 words";
                }
            }
        }
        if (empty($data['email'])) {
            $emailErr = "Email is required";
        } else {
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Not a valid email. e.g ......@email.com";
                $data['email'] = "";
            }
        }

        if (empty($data['dob'])) {
            $ddErr = "Date of Birth is required";
        } 


        if (
            $nameErr == "" && $emailErr == "" && $genderErr == "" && $dobErr == "" &&
           
        ) {
            if (updateUser($data) == true) {
                $_SESSION['name'] = $data['name'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['gender'] = $data['gender'];
                $_SESSION['dob'] = $data['dob'];
                $_SESSION['photo'] = $data['photo'];

                header('location: profile.php');
            }
        }
    }
}
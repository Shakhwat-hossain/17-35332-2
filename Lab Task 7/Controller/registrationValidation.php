<?php
//session_start();
require_once 'model/model.php';
$nameErr = $emailErr = $genderErr = $ddErr = $mmErr = $yyyyErr
    = $dobErr = $unameErr = $passErr = $cpassErr = $deptErr = $positionErr = $idErr = $photoErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) {
        $data['name'] = $_POST['name'];
        $data['email'] = $_POST['email'];
        $data['uname'] = $_POST['uname'];
        $p = $_POST['pass'];
        $data['pass'] = $_POST['pass'];
        $cpass = $_POST['cPass'];
        $data['date'] = $_POST['date'];
        $data['month'] = $_POST['month'];
        $data['year'] = $_POST['year'];
        $data['id'] = $_POST['id'];
        $data['photo'] = basename($_FILES["photo"]["name"]);

        $target_dir = 'uploads/';
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);

        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

        if (!isset($_POST['dept'])) {
        } else {
            $data['dept'] = $_POST['dept'];
        }

        if (!isset($_POST['position'])) {
        } else {
            $data['position'] = $_POST['position'];
        }

        if (!isset($_POST['gender'])) {
        } else {
            $data['gender'] = $_POST['gender'];
        }


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
                $emailErr = "Not a valid email. e.g anything@email.com";
                $data['email'] = "";
            }
        }
        if (empty($data['uname'])) {
            $unameErr = "User Name is required";
        } else {
            if (!preg_match("/^[a-zA-Z-'0-9 ]*$/", $data['uname'])) {
                $unameErr = "Only letters and white ifspace allowed";
                $data['uname'] = "";
            } else {
                if (strlen($data['uname']) < 2) {
                    $unameErr = "Name must contain atleast 2 characters";
                    $data['uname'] = "";
                }
            }
        }
        if (empty($p)) {
            $passErr = "Password is required";
        } else {
            if (strlen($p) < 8) {
                $passErr = "Password must contain atleast 8 characters";
            } else if (!preg_match("/[@#$%]/", $p)) {
                $passErr = "Password must contain a special character";
            }
        }
        if (empty($cpass)) {
            $cpassErr = "Retype password";
            $p = "";
        } else {

            if ($cpass != $p) {
                $cpassErr = "Password does not match with new password";
            }
        }

        if (empty($data['date'])) {
            $ddErr = "Date is required";
        } else {
            if ($data['date'] < 1  || $data['date'] > 31) {
                $ddErr = "Enter a valid date";
            }
        }

        if (empty($data['month'])) {
            $mmErr = "Month is required";
        } else {
            if ($data['month'] < 1  || $data['month'] > 12) {
                $mmErr = "Enter a valid month";
            }
        }

        if (empty($data['year'])) {
            $yyyyErr = "Year is required";
        } else {
            if ($data['year'] < 1901  || $data['year'] > 2000) {
                $yyyyErr = "Enter a valid year";
            }
        }

        if (empty($_POST['gender'])) {
            $genderErr = "Select a gender";
        }

        if (empty($_POST['dept'])) {
            $deptErr = "Select a department";
        }

        if (empty($_POST['position'])) {
            $positionErr = "Select your position";
        }

        if (empty($_POST['id'])) {
            $idErr = "Provide your ID";
        }

        if (empty($_FILES['photo']['size'])) {
            $photoErr = "Insert your photo";
        }




        if (
            $nameErr == "" && $emailErr == "" && $unameErr == "" && $passErr == "" && $cpassErr == "" && $genderErr == "" && $ddErr == "" &&
            $mmErr == "" && $yyyyErr == "" && $deptErr == "" && $positionErr == "" && $idErr == "" && $photoErr == ""
        ) {
            if (addUser($data) == true) {
                header('location: login.php');
            }
        }
    }
}


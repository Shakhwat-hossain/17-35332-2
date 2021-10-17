<?php
require_once 'Model/db_layer.php';
$EmailErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) {
        if (empty($_POST['email'])) {
            $EmailErr = "Enter your email";
        } else {
            $data['email'] = $_POST['email'];
            $result = searchPassword($data);
            if (!empty($result)) {
                if ($_POST['email'] == $result[0]['Email']) {
                    echo "YOUR PASSWORD IS " . $result[0]['Password'];
                }
            } else {
                echo "USER NOT FOUND";
            }
        }
    }
}
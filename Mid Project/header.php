<?php

session_start();


if (empty($_SESSION['flag'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <style>
            .error {
                color: #FF0000;
            }
        </style>
    </head>

    <body>
        <table border="0" width="100%">
            <tr>
                
             
            </tr>
            <tr>
                <td colspan="3" height="530px" align="center">

                <?php
            } else {

                ?>

                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="" content="width=device-width, initial-scale=1.0">
                        <title></title>
                        <style>
                            .error {
                                color: #FF0000;
                            }
                        </style>
                    </head>

                    <body>
                        <table border="groove" width="100%" >
                           
                                <td align="center">Logged in as <a href="profile.php"><?php echo $_SESSION['uname'] ?></a> | <a href="logout.php">Logout</a>

            <div style="font-size:30px;" align="right"> <a href="profile.php"> <span style="font-size: 30px;"> Profile</a> <a href="dashboard.php"><span style="font-size: 30px;">Dashboard </a>  <a href="Login.php"> <span style="font-size: 30px;">Login<a href="Home.php"><span style="font-size: 30px;"> Home</a></span> </a></div></td>
                            </tr>
                            <tr>
                                <td>
                                <?php
                            }
                                ?>
<?php
include 'connection_db.php';
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql= mysqli_query($db, "select username from caccount where username='$user_check'");

if(!isset($_SESSION['login_user'])){
    header("location:Template1.php");
}


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>

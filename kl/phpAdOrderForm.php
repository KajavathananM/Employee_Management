<?php 
session_start();
require 'connection_db.php';
$username=$_SESSION['login_user'];
$result3=("select * from employee where username='$username'");
$sqli= mysqli_query($db, $result3);
while($row3= mysqli_fetch_array($sqli)){
    $name=$row3['name'];
    $address=$row3['address'];
    $contactNumber=$row3['contactNumber'];
    $email=$row3['email'];
}
$date=date("Y/m/d");
$method=$_POST["method"];
$total=$_POST["total"];
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
        if(isset($_POST["name"]) && isset($_POST["address"]) && isset($_POST["contactNumber"]) &&isset($_POST["email"]) &&isset($_POST["date"]) &&isset($_POST["method"]) &&isset($_POST["total"])){
            $fname=$_POST["name"];
            $address=$_POST["address"];
            $contactNumber=$_POST["contactNumber"];
            $email=$_POST["email"];
            $date=$_POST["date"];
            $method=$_POST["method"];
            $total=$_POST["total"];
        }
     
        if(isset($_POST["add"])){
            
            $insertString=("insert into orderform values('$fname','$address','$contactNumber','$email','$date','$method','$total')");
             if(!mysqli_query($db,$insertString)){
             die('Error :'.mysqli_error());
                
           }else
           {
            
            include 'AdConfirmOrder.php';}
        }
        ?>
    </body>
</html>

<?php require 'connection_db.php';
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

<html>
    <head></head>
    <body>
          <?php
         
          if(isset($_POST["fname"]) && isset($_POST["nic"]) && isset($_POST["address"]) &&isset($_POST["contactNumber"]) &&isset($_POST["email"])&&isset($_POST["username"])&&isset($_POST["password"])&&isset($_POST["sdetails"])&&isset($_POST["saddress"])&&isset($_POST["sregno"])&&isset($_POST["scnumber"])){
            $fname=$_POST["fname"];
            $nic=$_POST["nic"];
            $address=$_POST["address"];
            $contactNumber=$_POST["contactNumber"];
            $email=$_POST["email"];
            $username=$_POST["username"];
            $password=$_POST["password"];
            $sdetails=$_POST["sdetails"];
            $saddress=$_POST["saddress"];
            $sregno=$_POST["sregno"];
            $scnumber=$_POST["scnumber"];
            }
            else
        {
            $error="One or More fields are not filled";
            echo $error;
        }
        if(isset($_POST["save"])){
            
         $sql2="UPDATE caacount SET fname='$fname', address='$address' , contactNumber='$contactNumber' , email='$email' , username='$username' , password='$password' , sdetails='$sdetails' , saddress='$saddress' , sregno='$sregno' , scnumber='$scnumber' WHERE nic='$nic'";
         if(!mysqli_query($db,$sql2)){
                die('Error :'.mysqli_error());
                
            }else
            {
            
            include 'CProfile.php';}
        }
        ?>

    </body>
</html>

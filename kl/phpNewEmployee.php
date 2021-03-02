<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require 'connection_db.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_POST["name"]) && isset($_POST["enic"]) && isset($_POST["dob"]) &&isset($_POST["address"]) &&isset($_POST["contactNumber"]) &&isset($_POST["email"]) &&isset($_POST["username"]) &&isset($_POST["password"]) &&isset($_POST["designation"]) &&isset($_POST["bsalary"]) &&isset($_POST["availability"]) &&isset($_POST["joined"]) &&isset($_POST["left"]) &&isset($_POST["eid"])){ 
          
          
            $name=$_POST["name"];
            $enic=$_POST["enic"];
            $dob=$_POST["dob"];
            $address=$_POST["address"];  
            $contactNumber=$_POST["contactNumber"];
            $email=$_POST["email"];
            $username=$_POST["username"];
            $password=$_POST["password"]; 
            $designation=$_POST["designation"];
            $bsalary=$_POST["bsalary"];
            $availability=$_POST["availability"];
            $joined=$_POST["joined"];
            $left=$_POST["left"]; 
            $eid=$_POST["eid"];
            }
            else
        {
            $error="One or More fields are not filled";
            echo $error;
        }
        if(isset($_POST["add"])){
            
            $insertString=("insert into employee values('$name','$enic','$dob','$address','$contactNumber','$email','$username','$password','$designation','$bsalary','$availability','$joined','$left','$eid')");
            
            if(!mysqli_query($db,$insertString)){
                die('Error :'.mysqli_error());
                
            }else
            {
            
            include 'display.php';
        }
            }
        ?>
    </body>
</html>

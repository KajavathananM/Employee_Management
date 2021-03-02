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
        <?php
        if(isset($_POST["stnumber"]) && isset($_POST["pronumber"]) && isset($_POST["description"]) && isset($_POST["expire"]) &&isset($_POST["pprice"]) && isset($_POST["sprice"]) && isset($_POST["quantity"])){
            $stnumber = $_POST["stnumber"];
            $pronumber = $_POST["pronumber"];
            $description = $_POST["description"];
            $expire = $_POST["expire"];
            $pprice = $_POST["pprice"];
            $sprice = $_POST["sprice"];
            $quantity = $_POST["quantity"];
        }
         else
        {
            $error="One or More fields are not filled";
            echo $error;
        }
                if(isset($_POST["addstock"])){
            
            $insertString=("insert into stock values('$stnumber','$pronumber','$description','$expire','$pprice','$sprice','$quantity')");
            if(!mysqli_query($db,$insertString)){
                die('Error :'.mysqli_error());
                
            }else
            {
            
            include 'stockadd.php';}
        }
        ?>
    </body>
</html>

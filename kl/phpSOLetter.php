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
        if(isset($_POST["onumber"]) && isset($_POST["crnumber"]) && isset($_POST["odate"]) &&isset($_POST["odetails"])){ 
          
          
            $onumber=$_POST["onumber"];
            $crnumber=$_POST["crnumber"];
            $odate=$_POST["odate"];
            $odetails=$_POST["odetails"];     
            }
            else
        {
            $error="One or More fields are not filled";
            echo $error;
        }
        if(isset($_POST["order"])){
            
            $insertString=("insert into supply1 values('$onumber','$crnumber','$odate','$odetails')");
            
            if(!mysqli_query($db,$insertString)){
                die('Error :'.mysqli_error());
                
            }else
            {
            
            include 'AdSupOrder.php';
        }
            }
        ?>
    </body>
</html>

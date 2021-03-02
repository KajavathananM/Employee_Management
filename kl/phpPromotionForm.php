<?php
session_start();
require 'connection_db.php';
$username=$_SESSION['login_user'];
$result3=("select * from caccount where username='$username'");
$sqli= mysqli_query($db, $result3);
while($row3= mysqli_fetch_array($sqli)){
    $fname=$row3['fname'];
    $address=$row3['address'];
}


?>


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
         if(isset($_POST["fname"]) && isset($_POST["address"]) && isset($_POST["pdescription"]) &&isset($_POST["tprice"])){
            $fname=$_POST["fname"];
            $address=$_POST["address"];
            $pdescription=$_POST["pdescription"];
            $tprice=$_POST["tprice"];       
            }
            else
        {
            $error="One or More fields are not filled";
            echo $error;
        }
        if(isset($_POST["placeOrder"])){
            
            $insertString=("insert into promotionform values('$fname','$address','$pdescription','$tprice')");
            if(!mysqli_query($db,$insertString)){
                die('Error :'.mysqli_error());
                
           }else
          
           {
            include 'ConfirmPromotion.php';}
        }
        ?>
    </body>
</html>

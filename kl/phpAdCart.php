<?php 
session_start();
require 'connection_db.php';
$username=$_SESSION['login_user'];
$result3=("select * from employee where username='$username'");
$sqli= mysqli_query($db, $result3);
while($row3= mysqli_fetch_array($sqli)){
    $name=$row3['name'];
}
$date=date("Y/m/d");
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
               
                   if(isset($_POST["oform"])){
                    
             foreach ($_SESSION["shopping_cart"] as $keys =>$values){
                        
                          $itemname=$values["item_name"];
                          $quantity=$values["item_quantity"];
                          $total=$values["item_quantity"]*$values["item_price"];
                          
                          $insertString=("insert into cart values('$itemname','$quantity','$name','$date','$total')");
                          if(!mysqli_query($db,$insertString)){
                          die('Error :'.mysqli_error());}
          
             }
                                 }
            include 'AdOrderForm.php';
        
        
        
        ?>
        
       
    </body>
</html>


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
<html>
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" type="text/css" href="Styles/StyleSheets.css">

    </head>
    <body>
        <?php $title="LoginPromo";?>
        
        <div id="wrapper">
         <div id="banner">
         
         </div>
         
        <nav id="navigation">
	<ul id ="nav">
        <li><a href="LoginHome.php">Home</a></li>
	<li><a href="Loginpromo.php">Promotion & Deals</a></li>
	<li><a href="Logindarea.php">Delivery Area</a></li>
	<li><a href="Logincontact.php">Contact Us</a></li>
	<li><a href="Loginabout.php">About Us</a></li>
        </ul>
	</nav>
            
            <div id="content_area1">
        <nav id="navigation1">
	<ul id ="nav1">
        <li><p1>Featured Products</p1></li><br/>
	<li><a href="Loginyoghurt.php">Yoghurt</a></li>
	<li><a href="LoginIcecream.php">Ice Cream</a></li>
	<li><a href="Loginfreshmilk.php">Fresh Milk</a></li>
	<li><a href="Logincheese.php">Cheese</a></li>
	<li><a href="Loginmilkpowder.php">Milk Powder</a></li>
	<li><a href="Logincurd.php">Curd</a></li>	
        </ul>
	</nav>
        </div>
         
          <div id="content_area7">
             <image src ="Pictures/3.JPG"<br/><br/>
             
             <button class="button2" type="button" value="click" onclick="location.href='PromotionForm.php'">Click</button>
         </div>
         
            <div id="content_area7">
             <image src ="Pictures/4.JPG"<br/><br/>
             <button class="button2" type="button" value="click" onclick="location.href='PromotionForm1.php'">Click</button>
         </div>
         
            <div id="content_area7">
             <image src ="Pictures/5.JPG"<br/><br/>
             <button class="button2" type="button" value="click" onclick="location.href='PromotionForm2.php'">Click</button>
         </div>
         
            <div id="content_area7">
             <image src ="Pictures/Untitled.JPG"<br/><br/>
             <button class="button2" type="button" value="click" onclick="location.href='PromotionForm3.php'">Click</button>
         </div>
 <footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>

        
    </body>
</html>


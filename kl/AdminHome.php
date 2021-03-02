<?php
include('session.php');
require 'connection_db.php';
$username=$_SESSION['login_user'];
$result3=("select * from employee where username='$username'");
$sqli= mysqli_query($db, $result3);
while($row3= mysqli_fetch_array($sqli)){
    $name=$row3['name'];
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
         <link rel="stylesheet" type="text/css" href="Styles/StyleSheets.css"

    </head>
    <body>
        <?php
      $title="adlogin";
        ?>
    </body>
    <div id="wrapper">
         <div id="banner">
         
         </div>
         
        <nav id="navigation4">
	<ul id ="nav">
	<li><a href="adlogin.php">Home</a></li>
	<li><a href="adpromo.php">Promotion & Deals</a></li>
	<li><a href="addarea.php">Delivery Area</a></li>
	<li><a href="adcontact.php">Contact Us</a></li>
	<li><a href="adabout.php">About Us</a></li>
        </ul>
	</nav>
        
          <nav id="navigation2">
	<ul id ="nav">
	<li><a href="customerOrders.php">Customer Orders</a></li>
	<li><a href="suppOrders.php">Supplier Orders</a></li>
	<li><a href="cmanagement.php">Customer Management</a></li>
	<li><a href="emanagement.php">Employee Management</a></li>
        <li><a href="addstock.php">Stock</a></li>
	</ul>
	</nav>
        
	<div id="banner1"></div>
         <div id="content_area1">
        <nav id="navigation3">
	<ul id ="nav3">
        <li><p1>Featured Products</p1></li><br/>
	<li><a href="adyoghurt.php">Yoghurt</a></li>
	<li><a href="adIcecream.php">Ice Cream</a></li>
	<li><a href="adfreshmilk.php">Fresh Milk</a></li>
	<li><a href="adcheese.php">Cheese</a></li>
	<li><a href="admilkpowder.php">Milk Powder</a></li>
	<li><a href="adcurd.php">Curd</a></li>	
        </ul>
	</nav>
            
        </div>

        
        <div id="content_area">
        <p2>Thank You For Choosing Us!!!</p2><br/><br/>
<p3>Sisila Cream House Online Delivery is a locally owned and operated small business with one mission: to deliver the freshest, most healthy, locally-farmed milk and food products directly to your door.</p3><br/>
<p3>With your busy lifestyle, it can be difficult to routinely provide farm-fresh milk and food to your family. That’s where we come in. We work with Highland Company to deliver the finest quality food items directly to your business.</p3><br/>
<p3>Thank you again for choosing Sisila Cream House Online Delivery.  We look forward to serving you!</p3><br/>
        </div>
        <div id="sidebar">
            <h1>User Profile</h1>
            
            <image src ="Pictures/pro.png"<br/><br/>
            <p3><?php echo $name ?></p3>
            <br/>
            <a href="EProfile.php">View My Account</a><br/><br/>
            <input type="submit" name="logout" value="Log Out" onclick="location.href='Template.php'" class="button1" /><br/><br/>
         </div>
        
	<footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>
    
</html>

<?php
include('session.php');
require 'connection_db.php';
$username=$_SESSION['login_user'];
$result3=("select * from caccount where username='$username'");
$sqli= mysqli_query($db, $result3);
while($row3= mysqli_fetch_array($sqli)){
    $fname=$row3['fname'];
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
        <?php ?>
        
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
        
	
	
        <div id="banner1"></div>
        
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
        
        <div id="content_area">
            
        <p2>Thank You For Choosing Us!!!</p2><br/><br/>
<p3>Sisila Cream House Online Delivery is a locally owned and operated small business with one mission: to deliver the freshest, most healthy, locally-farmed milk and food products directly to your door.</p3><br/>
<p3>With your busy lifestyle, it can be difficult to routinely provide farm-fresh milk and food to your family. That’s where we come in. We work with Highland Company to deliver the finest quality food items directly to your business.</p3><br/>
<p3>Thank you again for choosing Sisila Cream House Online Delivery.  We look forward to serving you!</p3><br/>
        </div>
        <div id="sidebar">
            <h1>User Profile</h1>
            <image src ="Pictures/pro.png"<br/><br/>
            <p2><?php echo $fname ?><p2><br/>
            <a href="account.php" name="view">View My Account</a><br/><br/>
            <form name="logout" method="post" action="Home.php">
                <input type="submit" name="show" value="Log Out" class="button1"/></form>
         </div>
        
	<footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>
    </body>
</html>

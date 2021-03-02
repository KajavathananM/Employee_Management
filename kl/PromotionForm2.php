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
        <?php
$title="promotion";
        ?>
        <div id="wrapper">
         <div id="banner"></div>
         
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
         <div id="content_area8">
             <form name="PrOrderForm" method="POST" action="phpPromotionForm.php">
            <table>
                <tr>
                    <td>Name </td>
                    <td><input type="text" name="fname" value="<?php echo $fname ?>" required="required"/></td>
                </tr>
                
                <tr>
                    <td>Delivery Address </td>
                    <td><input type="text" size="20" name="address" value="<?php echo $address ?>" required="required" ></textarea></td>
                </tr>
                
                <tr>
                    <td>Description </td>
                    <td><input type="text" name="pdescription" value="Buy 10 &  Get 2 Free" required="required"></textarea></td>
                </tr>
                
                <tr>
                    <td>Total Price </td>
                    <td><input type="text" name="tprice" value="900.00"/></td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="placeOrder" value="Place Order" class="button1" ></td>
                </tr>
            </table>
        </form>
         
         </div>
         
          <footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>

    </body>
</html>


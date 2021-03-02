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
$title="adpromotion";
        ?>
        <div id="wrapper">
         <div id="banner"></div>
         
        <nav id="navigation">
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

         
        <div id="content_area1">
        <nav id="navigation1">
	<ul id ="nav1">
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
         <div id="content_area8">
           <form name="PrOrderForm" method="POST" action="AdConfirmPromotion.php">
            <table>
                <tr>
                    <td>Name </td>
                    <td><input id="Text1" type="text" name="fname" /></td>
                </tr>
                
                <tr>
                    <td>Delivery Address </td>
                    <td><textarea id="TextArea2" name="address"></textarea></td>
                </tr>
                
                <tr>
                    <td>Description </td>
                    <td><textarea id="TextArea3" name="description"></textarea></td>
                </tr>
                
                <tr>
                    <td>Total Price </td>
                    <td><input id="Text2" type="text" name="fprice"/></td>
                </tr>
                
                <tr>
                     <td><input type="submit" value="Place Order" ></td>
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



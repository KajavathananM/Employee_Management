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
    $titile="adabout";
        ?>
        <div id="wrapper">
         <div id="banner"></div>
         
<nav id="navigation4">
	<ul id ="nav4">
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
         <div id="content_area8">
             <p6>Check Stock</p6><br/><br/>
           <table>
                   <tr><td>Product ID:</td>
                          <td><input type="number" name="pronumber"/></td>
                      
                <td>Description &nbsp;</td><td><select name="description"/>
                <option>Vanila Flavoured Yoghurt - 90g</option><option>Low Fat Plain Unsweeted Yoghurt - 500ml</option>Sugar Free Fat Yoghurt - 90g<option></option>
                <option>Banana Flavoured - 90g</option><option>Mango Flavoured Yoghurt - 90g</option><option>Vanila Flavoued Ice Cream- 4L</option>
                <option>Vanila Flavoured Ice Cream- 2L</option><option>Vanila Flavoured Ice Cream- 1L</option><option>Vanila Flavoued Ice Cream- 500ml</option>
                <option>Vanila Flavoured Ice Cream- 80ml</option><option>Chocolate Flavoured Ice Cream- 4L</option><option>chocolate Flavoured Ice Cream -2L</option>
                <option>Chocolate Flavoured Ice Cream- 2L</option><<option>Chocolate Flavoured Ice Cream- 1L</option><option>Chocolate Flavoured Ice Cream- 500ml</option>
                <option>Chocolate Flavoured Ice Cream- 80ml</option><option>Strawberry Flavoured Ice Cream- 4L</option><option>Strawberry Flavoured Ice Cream- 2L</option>
                <option>Chocolate Fruit & Nut Ice Cream- 2L</option><option>Fruit & Nut Ice Cream- 1L</option><option>Mango Dream -1L</option><option>Butterscotch Ice Cream- 1L</option>
                <option>Chocolate Flavoured Milk</option><option>Vanila Flavoured Milk</option><option>Elakiri</option><option>Chocolate Milk</option><option>Vanila Milk</option>
                <option>Fresh Milk -450ml</option><option>Fresh Milk -900ml</option><option>Cheese - 200g</option><option>Cheese - 100g</option><option>Full Cream - 1Kg</option><option>Full Cream - 400g</option>
                <option>Non Fat Milk Powder - 400g</option><option>Curd Cup -500ml</option><option>Curd Pot -1Kg</option></td></tr>
                <tr><td>Quantity &nbsp;</td><td><input type="number" name="qu" readonly="readonly"/></td></tr>
           </table>
             
             <tr><td> <input type="button" value="Back" name="back" onclick="location.href='COrders.php'" class="button1"/></td></tr>

           
         </div>
         
          <footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>

    </body>
</html>


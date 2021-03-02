<?php
session_start();
require 'connection_db.php';
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
        $title="adcurd";
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
         <div id="content_area2">
             <h>Total 2 Products in Curd</h> 
         </div>
               
         <?php 
              $query= "SELECT * FROM curd ORDER BY id ASC";
             $result= mysqli_query($db,$query);
             if(mysqli_num_rows($result)>0)
          {
                 while($row= mysqli_fetch_array($result))
                 {
             ?>

         <form method="POST" action="AdCart.php?action=add&id=<?php echo $row["id"];?>">
                 <div id="content_area3">
             <img src="<?php echo $row["image"];?>"/><br/>
             <p4><?php echo $row["name"];?></p4><br/>
             <p5>Rs: <?php echo $row["price"];?>.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" value="1"/><br/><br/>
             <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?> "/>
             <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?> "/>
             <input type="submit" name="add" class="button2" value="Add To Cart"/>             
                 </div>
                      </form>
        
         <?php
        }
       }
        ?>
         <div id="content_area5"><input type="submit" name="show" value="Show Cart" class="button1" onclick="location.href='AdCart.php'"/></div>    
         
         <footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>
    </body>
</html>


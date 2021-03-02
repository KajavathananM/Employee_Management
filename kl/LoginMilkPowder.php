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
       $title="Loginmilkpowder";
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
              <div id="content_area2">
             <h>Total 3 Products in Milk Powder</h> 
         </div>
          <?php 
              $query= "SELECT * FROM milk ORDER BY id ASC";
             $result= mysqli_query($db,$query);
             if(mysqli_num_rows($result)>0)
          {
                 while($row= mysqli_fetch_array($result))
                 {
             ?>

         <form method="POST" action="Cart.php?action=add&id=<?php echo $row["id"];?>">
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
         <div id="content_area5"><input type="submit" name="show" value="Show Cart" class="button1" onclick="location.href='Cart.php'"/></div>    
         
         <footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>
    </body>
</html>


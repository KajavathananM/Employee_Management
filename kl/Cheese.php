<?php 

require_once 'connection_db.php';
?>
<!DOCTYPE html>
<html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" type="text/css" href="Styles/StyleSheets.css">
    </head>
    <body>
        <?php
    $title="cheese";
        ?>
         <div id="wrapper">
         <div id="banner"></div>
         
        <nav id="navigation">
	<ul id ="nav">
	<li><a href="Home.php">Home</a></li>
	<li><a href="promo.php">Promotion & Deals</a></li>
	<li><a href="darea.php">Delivery Area</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<li><a href="about.php">About Us</a></li>
        </ul>
	</nav>
         
        <div id="content_area1">
        <nav id="navigation1">
	<ul id ="nav1">
        <li><p1>Featured Products</p1></li><br/>
	<li><a href="yoghurt.php">Yoghurt</a></li>
	<li><a href="Icecream.php">Ice Cream</a></li>
	<li><a href="freshmilk.php">Fresh Milk</a></li>
	<li><a href="cheese.php">Cheese</a></li>
	<li><a href="milkpowder.php">Milk Powder</a></li>
	<li><a href="curd.php">Curd</a></li>	
        </ul>
	</nav>
        </div>
              <div id="content_area2">
             <h>Total 2 Products in Cheese</h> 
            </div>
      
             <div id="content_area3">
             <image src ="Pictures/ch1.JPG"<br/><br/>
               <p4>Cheese - 100g</p4><br/>
             <p5>Price: Rs 250.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
          <input type="submit" add="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
         <div id="content_area3">
             <image src ="Pictures/ch2.JPG"<br/><br/>
               <p4>Cheese - 200g</p4><br/>
             <p5>Price: Rs 400.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
  <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>

             
         
         <br/>
                  <footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>
    </body>
</html>

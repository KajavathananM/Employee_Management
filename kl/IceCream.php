<?php 
session_start();
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
    $title="IceCream";
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
         
        <div id="content_area4">
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
             <h>Total 16 Products in Ice Cream</h> 
            </div>
         
               <div id="content_area3">
             <image src ="Pictures/Vanilla.JPG"<br/><br/>
             <p4>Vanilla Flavoured - 4L</p4><br/>
             <p5>Price: Rs 840.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
              <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
             </div>
         
         <div id="content_area3">
             <image src ="Pictures/Vanilla.JPG"<br/><br/>
               <p4>Vanilla Flavoured - 2L</p4><br/>
             <p5>Price: Rs 460.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
 <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
         <div id="content_area3">
<image src ="Pictures/Vanilla.JPG"<br/><br/>
               <p4>Vanilla Flavoured - 1L</p4><br/>
             <p5>Price: Rs 260.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
              <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
         <div id="content_area3">
             <image src ="Pictures/Vanilla.JPG"<br/><br/>
               <p4>Vanila Flavoured - 500ml</p4><br/>
             <p5>Price: Rs 150.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
              <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
          
         <div id="content_area3">
             <image src ="Pictures/Vanilla.JPG"<br/><br/>
               <p4>Vanila Flavoured - 80ml</p4><br/>
             <p5>Price: Rs 35.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
 <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
         
         
         <div id="content_area3">
<image src ="Pictures/Chocolate.JPG"<br/><br/>
               <p4>Chocolate Flavoured - 4L</p4><br/>
             <p5>Price: Rs 840.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
             <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
         <div id="content_area3">
             <image src ="Pictures/Chocolate.JPG"<br/><br/>
               <p4>Chocolate Flavoured - 2L</p4><br/>
             <p5>Price: Rs 460.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
              <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
         <div id="content_area3">
             <image src ="Pictures/Chocolate.JPG"<br/><br/>
               <p4>Chocolate Flavoured - 1L</p4><br/>
             <p5>Price: Rs 300.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
       <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
         <div id="content_area3">
             <image src ="Pictures/Chocolate.JPG"<br/><br/>
               <p4>Chocolate Flavoured - 500ml</p4><br/>
             <p5>Price: Rs 160.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
 <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
         <div id="content_area3">
             <image src ="Pictures/Chocolate.JPG"<br/><br/>
               <p4>Chocolate Flavoured - 80ml</p4><br/>
             <p5>Price: Rs 35.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
          <input type="submit" value="add" name="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
         <div id="content_area3">
             <image src ="Pictures/Strawberry.JPG"<br/><br/>
               <p4>Strawberry Flavoured - 4L</p4><br/>
             <p5>Price: Rs 840.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
            <input type="submit" value="add" name="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
         <div id="content_area3">
<image src ="Pictures/Strawberry.JPG"<br/><br/>
               <p4>Strawberry Flavoured - 2L</p4><br/>
             <p5>Price: Rs 480.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
          <input type="submit" value="add" name="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
                  
         <div id="content_area3">
<image src ="Pictures/Fruit & Nut.JPG"<br/><br/>
               <p4>Fruit & Nut - 2L</p4><br/>
             <p5>Price: Rs 650.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
 <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
                  
         <div id="content_area3">
<image src ="Pictures/Fruit & Nut.JPG"<br/><br/>
               <p4>Fruit & Nut - 1L</p4><br/>
             <p5>Price: Rs 350.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
            <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
                  <div id="content_area3">
<image src ="Pictures/Mango Dream.JPG"<br/><br/>
               <p4>Mango Dream - 1L</p4><br/>
             <p5>Price: Rs 300.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
              <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
         
                  <div id="content_area3">
<image src ="Pictures/Butterscotch.JPG"<br/><br/>
               <p4>Butterscotch - 1L</p4><br/>
             <p5>Price: Rs 350.00</p5><br/>
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

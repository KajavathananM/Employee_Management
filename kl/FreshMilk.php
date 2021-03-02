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
    $title="freshmilk";
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
         
        <div id="content_area6">
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
             <h>Total 7 Products in Fresh Milk</h> 
            </div>
           <div id="content_area3">
             <image src ="Pictures/cf.JPG"<br/><br/>
             <p4>Chocolate Flavoured</p4><br/>
             <p5>Price: Rs 40.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
  <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">

         </div>
       
          <div id="content_area3">
             <image src ="Pictures/vf.JPG"<br/><br/>
             <p4>Vanila Flavoured</p4><br/>
             <p5>Price: Rs 40.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
  <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">

         </div>

          <div id="content_area3">
             <image src ="Pictures/Elakiri-60.JPG"<br/><br/>
             <p4>Elakiri</p4><br/>
             <p5>Price: Rs 60.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
  <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>

         <div id="content_area3">
             <image src ="Pictures/c35.JPG"<br/><br/>
             <p4>Chocolate</p4><br/>
             <p5>Price: Rs 35.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
  <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
             </div>
         
         
         <div id="content_area3">
             <image src ="Pictures/.JPG"<br/><br/>
               <p4>Vanila</p4><br/>
             <p5>Price: Rs 35.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
             <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
           <div id="content_area3">
             <image src ="Pictures/fm1.JPG"<br/><br/>
               <p4>Fresh Milk - 450ml</p4><br/>
             <p5>Price: Rs 75.00</p5><br/>
             <p4>Quantity</p4><input type="text" name="q" size="6" autofocus="autofocus"/><br/><br/>
               <input type="submit" name="add" value="Add To Cart" class="button2" onclick="location.href='Template1.php'">
         </div>
           <div id="content_area3">
             <image src ="Pictures/fm2.JPG"<br/><br/>
               <p4>Fresh Milk - 900ml</p4><br/>
             <p5>Price: Rs 135.00</p5><br/>
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

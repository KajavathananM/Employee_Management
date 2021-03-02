<?php 
require 'connection_db.php';
$username=$_SESSION['login_user'];
$result3=("select * from caccount where username='$username'");
$sqli= mysqli_query($db, $result3);
while($row3= mysqli_fetch_array($sqli)){
    $fname=$row3['fname'];
}
$date=date("Y/m/d");
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
        <?php $title="ordco";?>
        
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
  <div id="content_area15">
             <p6>Your Order will be confirmed with in two hours.</p6><br/><br/>
             <h4>You can cancel your order after confirmed with in one hour</h4>
             <h2><u>Order Receipt</u></h2>
             <?php 
              $query= "SELECT * FROM orderform where fname='$fname' && date='$date'";
              $result= mysqli_query($db,$query);
              if(mysqli_num_rows($result)>0)
          {
                 while($row= mysqli_fetch_array($result))
                 {
             ?>

         <form method="POST" action="">
                 <div id="content_area3">
            
             <p4>Name:<?php echo $row["fname"];?></p4><br/>
             <p5>Address: <?php echo $row["address"];?></p5><br/>
              <p4>Contact Number: <?php echo $row["contactNumber"];?></p4><br/>
             <p5>Order Date: <?php echo $row["date"];?></p5><br/>
             <p4>Payment Method: <?php echo $row["method"];?></p4><br/>
             <p5>Total Price: Rs.<?php echo $row["total"];?>.00</p5><br/>
                 </div>
                      </form>
        
         <?php
        }
       }
        ?>
            
       
         
         </div>
         
         
          <footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>
    </body>
</html>






<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Project</title>
       <link rel="stylesheet" type="text/css" href="Styles/StyleSheets.css">
</head>
    <body>
     <div id="wrapper">
         <div id="banner">
         
         </div>
         
        <nav id="navigation">
	<ul id ="nav">
	<li><a href="Home.php">Home</a></li>
	<li><a href="index1.php">Employees</a></li>
	<li><a href="promo.php">Promotion & Deals</a></li>
	<li><a href="darea.php">Delivery Area</a></li>
	<li><a href="contact.php">Contact Us</a></li>
	<li><a href="about.php">About Us</a></li>
        </ul>
	</nav>
        
	
	
        <div id="banner1"></div>
        
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
        
        <div id="content_area">

		
		  <?php
        include 'employee.php';
        ?>
		
		
		</div>
        <div id="sidebar">
            <h1>Sign In</h1>
            <input type="text" name="username" placeholder="UserName" required="required"/><br/><br/>
            <input type="password" name="password" placeholder="Password" required="required"/><br/><br/>
            <a href="forget">Forget User Name or Password</a><br/><br/>
            <form name="clogin" method="post" action="phpLoginHome.php">
                <input type="submit" name="login" value="Log In" class="button1"/></form>
            <form name="signup" method="post" action="SignUp.php">
                <input type="submit" name="signup" value="Sign Up" class="button1"/></form><br/><br/>
            <h>New Here!! Click Sign Up</h>
        </div>
        
	<footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>

</div>
		
    </body>
</html>

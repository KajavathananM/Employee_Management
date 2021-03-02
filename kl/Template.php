<?php
include 'connection_db.php';
session_start(); 
if(isset($_POST["login"])){
    $username= mysqli_real_escape_string($db,$_POST['username']);
    $password= mysqli_real_escape_string($db,$_POST['password']);
    $sql="SELECT * FROM caccount WHERE username='$username' and password='$password'";
    $result= mysqli_query($db,$sql);
    $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
    if($row['usertype']==1){
        $_SESSION['login_user']=$username;
        header("location:LoginHome.php");
    }else if($row['usertype']==0){
        $_SESSION['login_user']=$username;
        header("location:AdLogin.php");
    }
    else{
        header("location:Template1.php");
}
}
?>

<!DOCTYPE html>
<html>
    
    <head> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php $title; ?>
        </title>
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
        <p2>Thank You For Choosing Us!!!</p2><br/><br/>
<p3>Sisila Cream House Online Delivery is a locally owned and operated small business with one mission: to deliver the freshest, most healthy, locally-farmed milk and food products directly to your door.</p3><br/>
<p3>With your busy lifestyle, it can be difficult to routinely provide farm-fresh milk and food to your family. That’s where we come in. We work with Highland Company to deliver the finest quality food items directly to your business.</p3><br/>
<p3>Thank you again for choosing Sisila Cream House Online Delivery.  We look forward to serving you!</p3><br/>
        </div>
        <div id="sidebar">
            <form name="login" method="POST" action="">
            <h1>Sign In</h1>
            <input type="text" name="username" placeholder="UserName" required="required"/><br/><br/>
            
            <input type="password" name="password" placeholder="Password" required="required"/><br/><br/>
            
            <a href="forget.php">Forget User Name or Password</a><br/><br/>
            <input type="submit" name="login" value="Log In" class="button1"/>
            
            <input type="submit" name="signup" value="Sign Up" onclick="location.href='SignUp.php'" class="button1"/>
            <br/>
            <br/>
            <br/>
            <h>New Here!! Click Sign Up</h>
            </form>
        </div>
        
	<footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>

</div>
		
    </body>
</html>

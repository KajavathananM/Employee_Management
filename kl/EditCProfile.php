<?php 
session_start();
require 'connection_db.php';
$username=$_SESSION['login_user'];
$result3=("select * from caccount where username='$username'");
$sqli= mysqli_query($db, $result3);
while($row3= mysqli_fetch_array($sqli)){
    $fname=$row3['fname'];
    $nic=$row3['nic'];
    $address=$row3['address'];
    $contactNumber=$row3['contactNumber'];
    $email=$row3['email'];
    $username=$row3['username'];
    $password=$row3['password'];
    $sdetails=$row3['sdetails'];
    $saddress=$row3['saddress'];
    $sregno=$row3['sregno'];
    $scnumber=$row3['scnumber'];
}
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
        $titile="caccount";
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
         <div id="content_area10">
             <p6>My Account</p6><br/><br/>
             <form name="myaccount" method="POST" action="phpEditCProfile.php">
            <table>
                <tr>
                    <td><u>Personal Information</u></td></tr>
                    <tr><td>Name : </td>
                        <td><input id="Text1" type="text" name="fname" value="<?php echo $fname ?>"/></td>
                </tr>
                
                <tr>
                    <td>NIC Number : </td>
                    <td><input id="Text2" type="text" name="nic" value="<?php echo $nic ?>" readonly="readonly"/></td>
                </tr>
                
                <tr>
                    <td>Delivery Address : </td>
                    <td><input id="TextArea2" name="address" value="<?php echo $address ?>" ></td>
                </tr>
                
                <tr>
                    <td><u>Contact Information</u></td></tr>
                    <tr><td>Contact Number :  </td>
                        <td><input id="Text3" type="number" name="contactNumber" value="<?php echo $contactNumber ?>"/></td>
                </tr>
                
                <tr>
                    <td>Email : </td>
                    <td><input id="text4" type="email" name="email" value="<?php echo $email ?>"/></td>
                </tr>
                
                               
                <tr>
                    <td><u>Login Details</u></td></tr>
                    <td>User Name (6-8 characters) : </td>
                    <td><input id="Text4" type="text" name="username" value="<?php echo $username ?>"/></td>
                </tr>
                
                <tr>
                    <td>Password : </td>
                    <td><input id="Text5" type="password" name="password" value="<?php echo $password ?>"/></td>
                </tr>
                
                <td><u>Shop Details</u></td></tr>
                    <td>Shop Name : </td>
                    <td><input id="Text6" type="text" name="sdetails" value="<?php echo $sdetails ?>"/></td>
                </tr>
                
                <td>Shop Address : </td>
                <td><input id="Text7" type="text" name="saddress" value="<?php echo $saddress ?>"/></td>
                </tr>
                
                <td>Shop Registration Number : </td>
                <td><input id="Text8" type="text" name="sregno" value="<?php echo $sregno ?>"/></td>
                </tr>
                
                <tr>
                    <td>Shop Contact Number : </td>
                    <td><input id="Text9" type="number" name="scnumber" value="<?php echo $scnumber ?>"/></td>
                </tr>
                </table>
                 <br/>
                 
             <div id="content_area11"><input type="submit" name="save" value="Save" class="button1"/></div>    
   
             </form></div>
         
          <footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>
    </body>
</html>

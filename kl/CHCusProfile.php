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
        $titile="account";
        ?>
        <div id="wrapper">
         <div id="banner"></div>
         
        <nav id="navigation">
	<ul id ="nav">
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
        <nav id="navigation1">
	<ul id ="nav1">
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
         <div id="content_area10">
             <p6>Customer Account</p6><br/><br/>
             <form name="myaccount" method="POST" action="EditCProfile.php">
            <table>
                <tr>
                    <td><u>Personal Information</u></td></tr>
                    <tr><td>Name : </td>
                        <td><input id="Text1" type="text" name="fname" readonly="readonly" /></td>
                </tr>
                
                <tr>
                    <td>NIC Number : </td>
                    <td><input id="Text2" type="text" name="nic" readonly="readonly"></td>
                </tr>
                
                <tr>
                    <td>Delivery Address : </td>
                    <td><textarea id="TextArea2" name="address" readonly="readonly"></textarea></td>
                </tr>
                
                <tr>
                    <td><u>Contact Information</u></td></tr>
                    <tr><td>Contact Number :  </td>
                        <td><input id="Text3" type="number" name="contactNumber" readonly="readonly"></td>
                </tr>
                
                <tr>
                    <td>Email : </td>
                    <td><input id="text4" type="email" name="email" readonly="readonly"></td>
                </tr>
                
                               
                <tr>
                    <td><u>Login Details</u></td></tr>
                    <td>User Name (6-8 characters) : </td>
                    <td><input id="Text4" type="text" name="username" readonly="readonly" /></td>
                </tr>
                
                <tr>
                    <td>Password : </td>
                    <td><input id="Text5" type="password" name="password" readonly="readonly"></td>
                </tr>
                
                <td><u>Shop Details</u></td></tr>
                    <td>Shop Name : </td>
                    <td><input id="Text6" type="text" name="sdetails" readonly="readonly" /></td>
                </tr>
                
                <td>Shop Address : </td>
                <td><input id="Text7" type="text" name="saddress" readonly="readonly" /></td>
                </tr>
                
                <td>Shop Registration Number : </td>
                <td><input id="Text8" type="text" name="sregno" readonly="readonly"/></td>
                </tr>
                
                <tr>
                    <td>Shop Contact Number : </td>
                    <td><input id="Text9" type="number" name="scnumber" readonly="readonly"></td>
                </tr>
                </table>
                 <br/>
                 
                  </form></div>
         
          <footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>
    </body>
</html>



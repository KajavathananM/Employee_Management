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
      $title="empsal";
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
         <div id="content_area12">
             <p6>Employee Details</p6><br/><br/>
             <form name="checkemployee" method="POST" action="EditAdEProfile.php">
            <table>
                <tr>
                    <td><u>Personal Information</u></td></tr>
                    <tr><td>Name : </td>
                        <td><input id="Text1" type="text" name="name" readonly="readonly" /></td>
                </tr>
                
                <tr>
                    <td>NIC Number : </td>
                    <td><input id="Text2" type="text" name="enic" readonly="readonly"></td>
                </tr>
                
                <tr>
                    <td>Date Of Birth : </td>
                    <td><input id="Text3" type="date" name="dob" readonly="readonly"></td>
                </tr>
                

                
                <tr>
                    <td>Address : </td>
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
                
                <td><u>Other Details</u></td></tr>
                    <td>Designation : </td>
                    <td><input id="Text6" type="text" name="designation" readonly="readonly" /></td>
                </tr>
                
                <td>Basic Salary : </td>
                <td><input id="Text7" type="text" name="bsalary" readonly="readonly" /></td>
                </tr>
                
                <td>Availability : </td>
                <td><input id="Text8" type="text" name="availability" readonly="readonly"/></td>
                </tr>
                
                <tr>
                    <td>Joined Date : </td>
                    <td><input id="Text9" type="date" name="joined" readonly="readonly"></td>
                </tr>
                <tr>
                    <td>Left Date : </td>
                    <td><input id="Text9" type="date" name="left" readonly="readonly"></td>
                </tr>
                </table>
                 <br/>
                 
             <div id="content_area11"><input type="submit" name="change" value="Change Details" class="button1"/></div>    
   
             </form>
         <form name="checksalary" method="POST" action="EmpSal.php">
            <table>
                <tr>
                    <td><u>Salary Details</u></td></tr>
                <tr><td>Year &nbsp; </td><td><select name="year"/>
                <option>2016</option><option>2017</option><option>2018</option></td>
                <td>Month &nbsp;</td><td><select name="month"/>
                <option>January</option><option>February</option><option>March</option>
                <option>April</option><option>May</option><option>June</option>
                <option>July</option><option>August</option><option>September</option>
                <option>October</option><option>November</option><option>December</option></td>
                <td><input type="submit" name="check" value="Check"/></td>
                </tr>
                    <tr><td>Attendance : </td>
                        <td><input id="Text1" type="text" name="attendance" readonly="readonly" /></td>
                </tr>
                
                <tr>
                    <td>OT Hours : </td>
                    <td><input id="Text2" type="text" name="oth" readonly="readonly"/></td>
                </tr>
                
                <tr>
                    <td>Salary : </td>
                    <td><input id="Text3" type="text" name="salary" readonly="readonly"/></td>
                </tr>
                <tr>
                    <td>Salary Date : </td>
                    <<td><input id="Text10" type="date" name="sdate" readonly="readonly"/>
                          
                </tr>
        </table>
         </form>
         </div>
         <footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>
       </body>
</html>



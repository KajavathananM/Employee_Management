<?php
require 'connection_db.php';
$username=$_SESSION['login_user'];
$result3=("select * from employee where username='$username'");
$sqli= mysqli_query($db, $result3);
while($row3= mysqli_fetch_array($sqli)){
    $name=$row3['name'];
    $address=$row3['address'];
    $contactNumber=$row3['contactNumber'];
    $email=$row3['email'];
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
        <?php
    $titile="adabout";
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
         
          <div id="content_area18">
             <p6>Order Form</p6><br/><br/>
             <form name="CuOrderForm" method="POST" action="phpAdOrderForm.php">
            <table>
                <tr>
                    <td>Name : </td>
                    <td><input type="text" name="fname"  value="<?php echo $name ?>" readonly="Unchanged"/></td>
                </tr>
                
                <tr>
                    <td>Delivery Address : </td>
                    <td><input type="text" name="address" value="<?php echo $address ?>" readonly="Unchanged"/></td>
                </tr>
                
                <tr>
                    <td>Contact Number :  </td>
                    <td><input type="text" name="contactNumber" value="<?php echo $contactNumber ?>" readonly="Unchanged"/></td>
                </tr>
                
                  <tr>
                    <td>E mail :  </td>
                    <td><input type="text" name="contactNumber" value="<?php echo $email ?>" readonly="Unchanged"/></td>
                </tr>
                
                <tr>
                    <td>Order Date : </td>
                    <td><input type="date" name="date" value="<?php echo $date ?>" readonly="Unchanged"></td>
     
                </tr>
                
                <tr>
                    <td>Payment Method : </td>
                    <td><input type="radio" name="method" value="Cheque" checked="true" required="required"/>Cheque
                        <input type="radio" name="method" value="Cash"/>Cash
                    </td>
                </tr>
                               
                <tr>
                    <td><u>Order Details :</u></td></tr>
                
                  <?php 
                 
              $query= "SELECT * FROM cart where name='$name' && date='$date'" ;
              $result= mysqli_query($db,$query);
              if(mysqli_num_rows($result)>0)
          {
                 while($row= mysqli_fetch_array($result))
                 {
             ?>
            <tr><td><p4><?php echo $row["itemname"];?>-</p4></td>            
            <td>  <p4><?php echo $row["quantity"];?></p4></td>
          <?php
        }
       }
       ?>
 

         <?php 
                 $total=0;
              $query1= "SELECT * FROM cart where name='$name' && date='$date'" ;
              $result1= mysqli_query($db,$query1);
              if(mysqli_num_rows($result1)>0)
          {
                 while($row2= mysqli_fetch_array($result1))
                 {
             ?>
 <?php $total=$total +$row2["total"]  ?>
             
          <?php
        }

       }
       ?>
 <tr>
     <td>Total Price : </td>
         <td><input type="text" name="total" value="<?php echo $total ?>" readonly="Unchanged">
         </td></tr>
                
          
         </table>
                        
                 <input type="submit" name="add" value="Place Order" class="button1" >
                
     
                 </form>
          </div>
         
          <footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>

    </body>
</html>

         
        


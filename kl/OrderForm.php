<?php
require 'connection_db.php';
$username=$_SESSION['login_user'];
$result3=("select * from caccount where username='$username'");
$sqli= mysqli_query($db, $result3);
while($row3= mysqli_fetch_array($sqli)){
    $fname=$row3['fname'];
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
        $titile="order";
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
         <div id="content_area18">
             <p6>Order Form</p6><br/><br/>
             <form name="CuOrderForm" method="POST" action="phpOrderForm.php">
            <table>
                <tr>
                    <td>Name : </td>
                    <td><input type="text" name="fname"  value="<?php echo $fname ?>" readonly="Unchanged"/></td>
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
                 
              $query= "SELECT * FROM cart where fname='$fname' && date='$date'" ;
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
              $query1= "SELECT * FROM cart where fname='$fname' && date='$date'" ;
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

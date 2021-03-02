<?php
session_start();


require 'connection_db.php';

if (isset($_POST["add"])){
    if(isset($_SESSION["shopping_cart"])){
        $item_array_id=array_column($_SESSION["shopping_cart"],"item_id");
        if(!in_array($_GET["id"], $item_array_id)){
            $count=count($_SESSION["shopping_cart"]);
            $item_array= array(
      'item_id' =>$_GET["id"],
       'item_name' =>$_POST["hidden_name"],
       'item_price' =>$_POST["hidden_price"],
       'item_quantity'=>$_POST["q"]
                    );
            $_SESSION["shopping_cart"][$count]=$item_array;
            
            
        }
 
    }
else{
   $item_array= array(
      'item_id' =>$_GET["id"],
       'item_name' =>$_POST["hidden_name"],
       'item_price' =>$_POST["hidden_price"],
       'item_quantity'=>$_POST["q"]
   ) ;
   $_SESSION["shopping_cart"][0]=$item_array;
}
}
if(isset($_GET["action"])){
    if($_GET["action"]=="delete"){
        foreach ($_SESSION["shopping_cart"] as $keys=>$values){
            if($values["item_id"]==$_GET["id"])
            {
              unset($_SESSION["shopping_cart"][$keys])  ;
              echo '<script>alert("Item Removed")</script>';
              echo'<script>window.location="AdCart.php"</script>';
              
            }
        }
    }
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
       <div id="content_area8">
             <p6>My Cart</p6><br/><br/>
             <form name="oh" method="POST" action="phpAdCart.php">
             <table>
                <tr>
                    <th width="40%">Item Name</th>
                     <th width="40%">Quantity</th>
                     <th width="40%">Price</th>
                     <th witdth="40%">Total</th>
                     <th width="5%">Action</th>
                    
                </tr>
                
                
                <?php
                if(!empty($_SESSION["shopping_cart"])){
                    $total=0;
                    foreach ($_SESSION["shopping_cart"] as $keys =>$values){
                        ?>
                <tr>
                    <td><?php echo $values["item_name"];?></td>
                    <td><?php echo $values["item_quantity"];?></td>
                    <td><?php echo $values["item_price"];?>.00</td>
                    <td><?php echo number_format($values["item_quantity"]*$values["item_price"])?>.00</td>
                    <td><a href="Cart.php?action=delete&id=<?php echo values["item_id"];?>"><span class="text_danger">Remove</span></a></td>
                </tr>
                <?php
                $total=$total+ ($values["item_quantity"] * $values["item_price"]);
                    }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">Rs.<?php echo number_format($total,2);?></td>
                </tr>
                <?php 
                    }
         
                
                ?>
                 
                </table>
                 <input type="submit" name="oform" value="Place Order" class="button1"/> 
             </form>
            </div>
         
         
             
         
          <footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>

    </body>
</html>


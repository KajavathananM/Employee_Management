<!DOCTYPE html>
<html>
    <head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" type="text/css" href="Styles/StyleSheets.css">
    </head>
    <body>
        <?php
       $titile="signup";
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
         <div id="content_area10">
             <p6>Create A New Profile</p6><br/><br/>
             <h4>The form below allows you to create a profile which is necessary to place orders. Do not forget that this information is essential to use our services correctly. </h4>
             <form name="SignUp" method="POST" action="phpSignUp.php">

             
            <table>
                <tr>
                    <td><u>Personal Information</u></td></tr>
                    <tr><td>Name : </td>
                        <td><input id="Text1" type="text" name="fname" required="required"/>
               </td>

                </tr>
                
                <tr>
                    <td>NIC Number : </td>
                    <td><input id="Text2" type="text" name="nic" required="required"/>
</td>
                </tr>
                
                <tr>
                    <td>Delivery Address : </td>
                    <td><input id="Text" name="address" size="60" required="required"/></textarea>
</td>
                </tr>
                
                <tr>
                    <td><u>Contact Information</u></td></tr>
                    <tr><td>Contact Number :  </td>
                        <td><input id="Text3" type="number" name="contactNumber" required="required"/>
</td>
                </tr>
                
                <tr>
                    <td>Email : </td>
                    <td><input id="text4" type="email" name="email" required="required"/>
</td>
                </tr>
                
                               
                <tr>
                    <td><u>Login Details</u></td></tr>
                    <td>User Name (6-8 characters) : </td>
                    <td><input id="Text4" type="text" name="username" size="8" required="required"/>
</td>
                </tr>
                
                <tr>
                    <td>Password : </td>
                    <td><input id="Text5" type="password" name="password" required="required"/>
</td>
                </tr>
                
                  <tr>
                    <td>User Type : </td>
                    <td><input id="Text5" type="int" value="1" name="usertype" required="required"/>
</td>
                </tr>
                

                
                <td><u>Shop Details</u></td></tr>
                    <td>Shop Name : </td>
                    <td><input id="Text6" type="text" name="sdetails" required="required"/>
</td>
                </tr>
                
                <td>Shop Address : </td>
                    <td><input id="Text7" type="text" name="saddress" required="required"/>
</td>
                </tr>
                
                <td>Shop Registration Number : </td>
                    <td><input id="Text8" type="text" name="sregno" required="required"/>
</td>
                </tr>
                
                <tr>
                    <td>Shop Contact Number : </td>
                    <td><input id="Text9" type="number" name="scnumber" required="required"/></td>
                </tr>
                </table>
        
             <div id="content_area11"> <input type="submit" name="create" value="Create" class="button1"/></div>    
   
             </form></div>
         
          <footer>
            <h>© 2018 Sisila Cream House Online Delivery. All rights reserved.</h><br/>
        <a href="conditons">Terms and Conditions</a></li>
        </footer>
        </div>
    </body>
</html>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php require 'connection_db.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    <tabble border="1"><tr><th>Product Name</th><th>Description</th><th>Quantity</th></tr>
        
        <?php
        $selectString="SELECT * from temorderform";
        $comments= mysqli_query($db,$selectString);
        while($show=mysqli_fetch_array($comments))
        {
            
        
        ?>
    <tr>
        <td><?php echo $row['product'];?></td>   
    <td><?php echo $row['description'];?></td>
    <td><?php echo $row['oquantity'];?></td>
    </tr>
    <?php
        }
        ?>
    </tabble>
    
    
    </body>
</html>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $db= new mysqli('localhost','root','root','sisilacreamhouse');
        if($db->connect_errno >0){
            die('Unable to connect database['.$db->connect_error.']');
        }
        ?>
    </body>
</html>

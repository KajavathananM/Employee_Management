<?php
require_once "config.php";   
	
	echo "Hello";
   
        $sql = "INSERT INTO employees (empid, firstName,lastName, designation,nic,contactNo,address) VALUES ('a', 'b', 'c', 'd', 222, 'went' ,'erw')";
         
                
            if(mysqli_stmt_execute($stmt)){
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }         
        mysqli_stmt_close($stmt);
    }    
    mysqli_close($link);
}
?>
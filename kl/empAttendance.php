
<?php

    // Include config file
    require_once "config.php";
    
	if($_SERVER["REQUEST_METHOD"] == "POST"){
    
		$desig = trim($_POST["desig"]);
		$days = trim($_POST["days"]);

 		
		$sql = "SELECT * FROM emp_salary WHERE designation in (SELECT designation FROM employees WHERE empid =?) ";    
		if($stmt = mysqli_prepare($link, $sql)){       
        mysqli_stmt_bind_param($stmt, "s", $param_desg);    
        $param_desg = trim($desig);		
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
		
			if(mysqli_num_rows($result) == 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			    $dess = $row["designation"];
                $salary = $row["salary_per_day"];	
            } else{
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }		
		}
		
		$salary = $salary * $days;
		
		$sql = "UPDATE employees SET salary=? WHERE empid=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ds", $salary,$param_desg);      
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index1.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    
    
    // Close connection
    mysqli_close($link);
		
	
}
	else{
	
    // Prepare a select statement
    $sql = "SELECT * FROM employees";  
  
    if($stmt = mysqli_prepare($link, $sql)){        
     
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);  
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
	
	}
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculate Salary</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Calculate Salary</h2>
                    </div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					
                    <div class="form-group col-md-12">
                        <label>Select Employee Id</label>
                        <select name="desig" >
						<?php
						 while ($row = $result->fetch_assoc()) {
						//unset($empid);
						$empid = $row['empid'];
						$designation = $row['designation'];
						echo '<option value="'.$empid.'"  >'.$empid.'</option>';
					}
					?>
						</select>
                    </div>
					
					
					<div class="form-group col-md-6">
                        <label>Number of days</label>
                        <input type="number" name="days" class="form-control" maxlength="2" autocomplete="off">

                    </div>     
                   <div class="col-md-12">
                    <input type="submit" class="btn btn-primary" value="Add">
                    <a href="index1.php" class="btn btn-default">Back</a>
					</div>
					</form>
				</div>
            </div>
        </div>        
    </div>
</body>
</html>
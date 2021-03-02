<?php
// Check existence of id parameter before processing further
if(isset($_GET["empid"]) && !empty(trim($_GET["empid"]))){
    // Include config file
    require_once "config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM employees WHERE empid = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["empid"]);
		
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);

    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
			    $empid = $row["empid"];
                $firstName = $row["firstName"];
			    $lastName = $row["firstName"];
                $designation = $row["designation"];
  		        $nic = $row["nic"];
		        $contactNo = $row["contactNo"];
		        $address = $row["address"];
				$salary = $row["Salary"];
              
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
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
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>Full name</label>
                        <p class="form-control-static"><?php echo $row["firstName"]." ".$row["lastName"]; ?></p>
                    </div>
					 <div class="form-group">
                        <label>Designation</label>
                        <p class="form-control-static"><?php echo $row["designation"]; ?></p>
                    </div>
					 <div class="form-group">
                        <label>NIC number</label>
                        <p class="form-control-static"><?php echo $row["nic"]; ?></p>
                    </div>
					 <div class="form-group">
                        <label>Contact Number</label>
                        <p class="form-control-static"><?php echo $row["contactNo"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <p class="form-control-static"><?php echo $row["address"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Salary</label>
                        <p class="form-control-static"><?php echo $row["Salary"]; ?></p>
                    </div>
                    <p><a href="index1.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
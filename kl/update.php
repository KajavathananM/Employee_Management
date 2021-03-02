<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$empid = $fname=$lname = $desig = $contact=$nic=$address="";
$empid_err = $fname_err=$lname_err = $desig_err = $nic_err =$contact_err= $address_err="";
 
 
// Processing form data when form is submitted
if(isset($_POST["empid"]) && !empty($_POST["empid"])){
    // Get hidden input value
    $id = $_POST["empid"];
	
    
	
	// Validate first name
    $input_fname = trim($_POST["fname"]);
    if(empty($input_fname)){
        $fname_err = "Please enter first name.";
    } elseif(!filter_var($input_fname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $fname_err = "Please enter a valid name.";
    } else{
        $fname = $input_fname;
    }
	
	//validate last name
	 $input_lname =trim($_POST["lname"]);
    if(empty($input_lname)){
        $lname_err = "Please enter last name.";
    } elseif(!filter_var($input_lname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $lname_err = "Please enter a valid name.";
    } else{
        $lname = $input_lname;
    }
    // designation
	$input_desig = trim($_POST["desig"]);
    if(empty($input_desig)){
        $desig_err = "Please choose designation.";     
    } else{
        $desig = $input_desig;
    }
   
	 // validate NIC	
    $input_nic =trim($_POST["nic"]);
    if(empty($input_nic)){
        $nic_err = "Please enter NIC.";
    } elseif(!filter_var($input_nic, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[0-9]{9}[x|X|v|V]$/")))){
        $nic_err = "Please enter a valid NIC.";
    } else{
        $nic =  $input_nic;
    }
	
	//validate contact number
	$input_contact =trim($_POST["contact"]);
    if(empty(trim($_POST["contact"]))){
        $contact_err = "Please enter Contact Number.";
	} elseif(!filter_var($input_contact, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/[0-9]{10}$/")))){
        $contact_err = "Please enter valid contact Number.";
    		
    }else{
        $contact =  $input_contact;
    }
	
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Please enter an address.";     
    } else{
        $address = $input_address;
    }
    
    
    // Check input errors before inserting in database
    if(empty($fname_err) && empty($lname_err) && empty($desig_err) &&  empty($nic_err) && empty($contact_err) && empty($address_err)){
        // Prepare an update statement
        $sql = "UPDATE employees SET firstName=?,lastName=?,designation=?,nic=?,contactNo=?, address=? WHERE empid=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_fname,$param_lname,$param_designation,$param_nic,$param_contactNo,$param_address, $param_id);
            
            // Set parameters
			$param_fname=$fname;
			$param_lname=$lname;
			$param_designation=$desig;
			$param_nic=$nic;
			$param_contactNo=$contact;
            $param_address = $address;
            $param_id = $id;
            
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
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["empid"]) && !empty(trim($_GET["empid"]))){
        // Get URL parameter
        $id =  trim($_GET["empid"]);
		        
        // Prepare a select statement
        $sql = "SELECT * FROM employees WHERE empid = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
  
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $fname = $row["firstName"];
                    $address = $row["address"];
					$nic = $row["nic"];					
					$lname = $row["lastName"];					
                    $desig = $row["designation"];
					$contact = $row["contactNo"];					   
				   
                } else{
                    // URL doesn't contain valid id. Redirect to error page
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
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                       <div class="form-group <?php echo (!empty($empid_err)) ? 'has-error' : ''; ?>">
                           
						 <div class="form-group <?php echo (!empty($fname_err)) ? 'has-error' : ''; ?>">
                            <label>First Name</label>
                            <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>" maxlength="20" autocomplete="off">
                            <span class="help-block"><?php echo $fname_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($lname_err)) ? 'has-error' : ''; ?> ">
                            <label>Last Name</label>
                            <input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>" maxlength="20" autocomplete="off">
							<span class="help-block"><?php echo $lname_err;?></span>
                        </div>
                      <div class="form-group <?php echo (!empty($desig_err)) ? 'has-error' : ''; ?>">
                            <label>Designation</label>
                            <select name="desig" class="form-control" value="<?php echo $desig; ?>">
							<option>Director</option>
							<option>Manager</option>
							<option>Driver</option>
							<option>Administrator</option>
							<option>Supplier</option>
							</select>
                            <span class="help-block"><?php echo $desig_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($contact_err)) ? 'has-error' : ''; ?> ">
                            <label>Contact Number</label>
                            <input type="text" name="contact" class="form-control" value="<?php echo $contact; ?>" maxlength="10" autocomplete="off" placeholder="eg: 0766557524(10 digits)">
							 <span class="help-block"><?php echo $contact_err;?></span>
						</div>
                       
					     <div class="form-group <?php echo (!empty($nic_err)) ? 'has-error' : ''; ?>">
                            <label>NIC Number</label>
                            <input type="text" name="nic" class="form-control" value="<?php echo $nic; ?>" maxlength="10" autocomplete="off" placeholder="eg: 970212345V(10 characters)">
                            <span class="help-block"><?php echo $nic_err;?></span>
                        </div>
					   
					    <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Address</label>
                            <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                            <span class="help-block"><?php echo $address_err;?></span>
                        </div>			
						
                        <input type="hidden" name="empid" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Update">
                        <a href="index1.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
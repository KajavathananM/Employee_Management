<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$empid = $fname=$lname = $desig = $contact=$nic=$address="";
$empid_err = $fname_err=$lname_err = $desig_err = $nic_err =$contact_err= $address_err="";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
   
   // Validate employee Id
    $input_empid = trim($_POST["empid"]);
    if(empty($input_empid)){
        $empid_err = "Please enter Employee Id.";     
    } else{
        $empid = $input_empid;
    }
	
	
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
    
   

	//$nic= trim($_POST["nic"]);
	//$address=trim($_POST["address"]);
	
	//$lname=trim($_POST["lname"]);
	//$contact=trim($_POST["contact"]);
	
	
	
    // Check input errors before inserting in database
    if(empty($empid_err) && empty($fname_err) && empty($lname_err) && empty($desig_err) &&  empty($nic_err) && empty($contact_err) && empty($address_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO employees (empid, firstName,lastName, designation,nic,contactNo,address) VALUES (?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_empid, $param_fname,$param_lname,$param_desig,$param_nic,$param_contact,$param_address);
            
            // Set parameters
			$param_empid = $empid;
            $param_fname = $fname; 
			$param_lname = $lname; 			
            $param_desig = $desig;
			$param_nic = $nic;
			$param_contact=$contact;
			$param_address=$address;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
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
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                       
					   <div class="form-group <?php echo (!empty($empid_err)) ? 'has-error' : ''; ?>">
                            <label>Emp ID</label>
                            <input type="text" name="empid" class="form-control" value="<?php echo $empid; ?>" autocomplete="off" placeholder="eg: E01">
                            <span class="help-block"><?php echo $empid_err;?></span>
                        </div>
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
                        <input type="submit" class="btn btn-primary" value="Add">
                        <a href="index1.php" class="btn btn-default">Cancel</a>
						<button type="button" onclick="saveDemo()" class="pull-right btn btn-warning ">Demo Add</button>
						
                    </form>
                </div>
            </div>    

			
        </div>
    </div>
	
	<script>
	function saveDemo(){
	
	console.log("<?php
$servername = "localhost";
$database = "sisilacreamhouse";
$username = "root";
$password = "root";

$conn = mysqli_connect($servername, $username, $password, $database);


if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

         
$sql = "INSERT INTO employees (empid, firstName,lastName, designation,nic,contactNo,address) VALUES 
('E13', 'Michael', 'Jackson','Director','971334568V','0765842341','16/4,Pedrika lane,Colombo 7'),
('E14', 'Gregory', 'Mathews','Administrator','975334568V','0755822341','15/3,Bosword Lane,Colombo 6'),
('E15', 'Lasith', 'Malinga','Supplier','975334568V','0756822321','16/9,Irene Lane,Colomno 5'),
('E16', 'Vialeon', 'Robert','Administrator','975334568V','0756822321','2/3,St Jones Lane,Colombo 3'),
('E17', 'Ram', 'Sree','Driver','975334568V','0756822321','1/2,Maligawatte lane,Colombo 6'),
('E18', 'Bruce', 'Lee','Driver','975334568V','0756822321','13/3,Kenwood lane,Colombo 7'),
('E19', 'Ezio', 'Auditorie','Director','975334568V','0756822321','192/3,Wasantha Lane,Colombo 6')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>");
	
	}
	</script>
</body>
</html>
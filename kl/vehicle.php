<?php
    require_once "config.php";
    
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		$vehicleId = trim($_POST["vehicleId"]);
		$driverName = trim($_POST["driverName"]);
        $vehicleType = trim($_POST["vehicleType"]);
        $routeId = trim($_POST["routeId"]);
      

 		 $sql = "INSERT INTO vehicles (vehicleid,empid,vehicletype,routeid) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ssss", $param_vehicleId, $param_driverName,$param_vehicleType,$param_routeId);
            
            // Set parameters
			$param_vehicleId = $vehicleId;
            $param_driverName = $driverName; 
            $param_vehicleType = $vehicleType; 	
            $param_routeId = $routeId; 		
			
            
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
    
    // Close connection
    mysqli_close($link);
		
	
}
	else{
	
    // Prepare a select statement
    $sql = "SELECT * FROM employees WHERE designation='Driver'";  
  
    if($stmt = mysqli_prepare($link, $sql)){        
     
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);  
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    $sql = "SELECT * FROM routes";  
  
    if($stmt = mysqli_prepare($link, $sql)){        
     
        if(mysqli_stmt_execute($stmt)){
            $resultRoute = mysqli_stmt_get_result($stmt);  
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
	
	     $sqlLoad = "SELECT * FROM vehicles left JOIN routes ON vehicles.routeid=routes.routeid";
                    if($results = mysqli_query($link, $sqlLoad)){
                        if(mysqli_num_rows($results) > 0){
                            echo "<div align='center'><div class='tablecontainer'> <table id='myTable' table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Vehicle Id</th>";
                                        echo "<th>Driver No</th>";
                                        echo "<th>Vehicle Type</th>";
                                        echo "<th>Area</th>";
                                        echo "<th>Description</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($results)){
                                    echo "<tr>";
                                        echo "<td>" . $row['vehicleid'] . "</td>";
                                        echo "<td>" . $row['empid'] . "</td>";
                                        echo "<td>" . $row['vehicletype'] . "</td>";
                                        echo "<td>" . $row['area'] . "</td>";
                                        echo "<td>" . $row['description'] . "</td>";
                                      
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table></div></div>";
                            // Free result set
                            mysqli_free_result($results);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    }
	
	}
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vehicle Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
		
		.tablecontainer { width: 1250px; overflow; hidden;}
			tr {display: block;  }
			th, td { width: 500px; }
			tbody { display: block; height: 200px; overflow: auto;}
    </style>
	
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
		 <div class="form-group col-md-8">
                        <label>Search Vehicle</label>
           <input type="text" class="form-control" id="myInput" onkeyup="searchByVehicleId()" placeholder="Search by vehicle id">
          </div> 
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Vehicle Details</h2>
                    </div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<div class="form-group col-md-8">
                        <label>Vehicle Id</label>
                        <input type="text" name="vehicleId" class="form-control" maxlength="6" autocomplete="off">
                    </div> 
                    <div class="form-group col-md-8">
                        <label>Driver Name</label>
                        <select name="driverName" class="form-control">
						<?php
						 while ($row = $result->fetch_assoc()) {
						$empid = $row['empid'];
						$firstName=$row['firstName'];
						$lastName=$row['lastName'];
						echo '<option value="'.$empid.'"  >'.$empid.':'.$firstName.' '.$lastName.'</option>';
					}
					?>
					</select>
                    </div>
					      <div class="form-group col-md-8">
                        <label>Vehicle Type</label>
                        <select name="vehicleType" class="form-control">
						<option value="motorbike">Motor Bike</option>
						<option value="threewheeler">Three Wheeler</option>
						<option value="van">Van</option>
						<option value="truck">Truck</option>
				
						</select>
                    </div>	

                        <div class="form-group col-md-8">
                        <label>Route</label>
                        <select name="routeId" class="form-control">
						<?php
						 while ($row = $resultRoute->fetch_assoc()) {
						$routeid = $row['routeid'];
						echo '<option value="'.$routeid.'"  >'.$routeid.'</option>';
					}
					?>
					</select>
                    </div>

                   <div class="col-md-12">
                    <input type="submit" class="btn btn-primary" value="Add">
                    <a href="index1.php" class="btn btn-default">Back</a>
					<button type="button" onclick="saveDemo()" class="pull-right btn btn-warning ">Demo Add</button>
					
					</div>
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

$sql = "INSERT INTO vehicles (vehicleid,empid,vehicletype,routeid) VALUES 
('V004', 'E11', 'motorbike','r4'),
('V005', 'E17', 'threewheeler','r5'),
('V006', 'E18', 'threewheeler','r6'),
('V007', 'E06', 'van','r7'),
('V008', 'E11', 'truck','r8')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>");
	
	}
</script>
	
<script>
function searchByVehicleId() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
	 </body>
</html>
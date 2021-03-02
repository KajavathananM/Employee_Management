
<?php
    require_once "config.php";
    $routeid = $description=$area="";
	$routeid_err = $description_err=$area_err="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
			// Validate route Id
			$input_routeid = trim($_POST["routeId"]);
			if(empty($input_routeid)){
				$routeid_err = "Please enter route Id.";     
			} else{
				$routeid = $input_routeid ;
			}	
			
			// Validate area
			$input_area = trim($_POST["area"]);
			if(empty($input_area)){
				$area_err = "Please enter area.";
			} else{
				$area = $input_area;
			}
			
			// Validate description
			$input_description =  trim($_POST["description"]);
			if(empty($input_description)){
				$description_err = "Please enter address.";
			}else{
				$description = 	$input_description;
			}

 		 
		if(empty($routeid_err) && empty($description_err) && empty($area_err)){     
			$sql = "INSERT INTO routes (routeid,description,area) VALUES (?, ?, ?)";
			if($stmt = mysqli_prepare($link, $sql)){
				
				mysqli_stmt_bind_param($stmt, "sss", $param_routeId, $param_description,$param_area);
				
				// Set parameters
				$param_routeId = $routeid;
				$param_description = $description; 
				$param_area = $area; 		
				
				
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
				

	
	}else{
	
	
	     $sqlLoad = "SELECT * FROM routes";
                    if($results = mysqli_query($link, $sqlLoad)){
                        if(mysqli_num_rows($results) > 0){
                            echo "<div align='center'><div class='tablecontainer'> <table id='myTable' class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Route Id</th>";
                                        echo "<th>Area</th>";
                                        echo "<th>Address</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($results)){
                                    echo "<tr>";
                                        echo "<td>" . $row['routeid'] . "</td>";
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
    <title>Route Details</title>
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
                        <label>Search route </label>
           <input type="text" class="form-control" id="myInput" onkeyup="searchByRouteId()" placeholder="Search by route id">
          </div> 
		
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Route Details</h2>
                    </div>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
					<div class="form-group col-md-8 <?php echo (!empty($routeid_err)) ? 'has-error' : ''; ?>">
                        <label>Route Id</label>
                        <input type="text" name="routeId" class="form-control" maxlength="6" autocomplete="off">
						<span class="help-block"><?php echo $routeid_err;?></span>
                    </div> 
                    <div class="form-group col-md-8 <?php echo (!empty($area_err)) ? 'has-error' : ''; ?>">
                        <label>Area</label>
                       	<input type="text" name="area" class="form-control" maxlength="20" autocomplete="off">
						<span class="help-block"><?php echo $area_err;?></span>
					</div> 
                    <div class="form-group col-md-8 <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                        <label>Address</label>
                        <input type="text" name="description" class="form-control" maxlength="50" autocomplete="off">
						<span class="help-block"><?php echo $description_err;?></span>
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

$sql = "INSERT INTO routes (routeid,description,area) VALUES 
('r4', 'Colombo 6', '16/5,Rosewood lane'),
('r5', 'Colombo 6', '13/3,Loris Lane'),
('r6', 'Colombo 7', '2/3,Gregory Lane'),
('r7', 'Colombo 3', '14/3,Yeursh Lane'),
('r8', 'Colombo 6', '4/9,Manning Lane')";
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
function searchByRouteId() {
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
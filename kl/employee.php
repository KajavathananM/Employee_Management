<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
         .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
			width: 450px;
			table-layout: fixed;
        }
		
		
		.tablecontainer { width: 450px; overflow; hidden;}
			tr {display: block;  }
			th, td { width: 450px; }
			tbody { display: block; height: 150px; overflow: auto;}
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
		
		<div class="form-group col-md-4">
          
           <input type="text" class="form-control" id="myInput" onkeyup="searchEmpById()" placeholder="Search by Employee Id">
		   </div> 
		   <div class="form-group col-md-6">
		   <input type="text" class="form-control" id="myInput2" onkeyup="searchEmpByDesignation()" placeholder="Search by designation">
           </div> 
		   
		   <div class="form-group col-md-3">
		   <a href="create.php" class="btn btn-success pull-right">Add Employee</a>
				</div>	
				<div class="form-group col-md-3">
					<a href="empAttendance.php" class="btn btn-success ">Find Salary</a>
					</div>
					<div class="form-group col-md-3">
					<a href="vehicle.php" class="btn btn-success ">Add Vehicle</a>
                   </div> <div class="form-group col-md-3">
					<a href="route.php" class="btn btn-success ">Add Route</a>	</div>
            <div class="row">
                <div class="col-md-10" style="background-color:white">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Employees Details</h2>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
											
                    </div>
					
					
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM employees";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<div class='tablecontainer'> <table id='myTable' table class='table table-bordered table-striped' >";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Emp Id</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Designation</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['empid'] . "</td>";
                                        echo "<td>" . $row['firstName']." " .$row['lastName'] . "</td>";
                                        echo "<td>" . $row['designation'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='read.php?empid=". $row['empid'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            echo "<a href='update.php?empid=". $row['empid'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                            echo "<a href='delete.php?empid=". $row['empid'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table></div>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
					
									
                </div>
            </div>        
        </div>
    </div>
<script>
function searchEmpById() {
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
<script>
function searchEmpByDesignation() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
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
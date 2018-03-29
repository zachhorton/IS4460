<?php

    require_once '../model/model.php';
    require_once '../authorization/check_session.php';
    
    session_start();
    
    $parent_list = $_SESSION['parent_list'];

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Parent List</title>
		
		<!-- Bootstrap CSS -->
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	
		<!-- JQuery, Popper.js, Bootstrap.js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  		<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
		<script>
            	var j$ = jQuery.noConflict();
            	j$(document).ready(function(){
            	    j$('#myTable').DataTable({"sPaginationType": "full_numbers"});
            	});
		</script>
	</head>
	
	<body>
	
		<?php require_once '../php/header.php';?>
	
		<div class="container-fluid">
			<div class="table-responsive table-bordered">
				<table class="table table-hover" id="myTable">
					<thead>
						<tr>
							<th><a href="../php/add_parent_record.php">Add Parent Record</a></th>
						</tr>

						<tr class="thead-light">
							<th>Parent ID</th>
        						<th>Parent First Name</th>
        						<th>Parent Middle Name</th>
        						<th>Parent Last Name</th>
        						<th>Street Address</th>
        						<th>City</th>
        						<th>State</th>
        						<th>Zip Code</th>
        						<th>Phone Number</th>
        						<th>E-Mail</th>
        						<th>Payment</th>
        					</tr>
					</thead>
					
					<tbody>
					
						<?php 
						  foreach ($parent_list as $parent) {
						?>
						
						<tr>
							<?php 
							 for ($j = 0; $j < 11; $j++) {
							?>
							
							<td><?php echo $parent[$j]; ?></td>
							
							<?php
							 }
							?>
						</tr>
						
						<?php 
						  }
						?>
												
					</tbody>
				</table>
			</div>
        </div>
		
	</body>
	
</html>
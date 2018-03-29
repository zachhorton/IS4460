<?php
    
    require_once '../model/model.php';
    require_once '../authorization/check_session.php';
    
    session_start();
    
    $sacrament_list = $_SESSION['sacrament_list'];

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Sacrament List</title>
		
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

						<tr class="thead-light">
							<th>Sacrament ID</th>
        						<th>Classroom Number</th>
        						<th>Sacrament</th>
        						<th>Catechist First Name</th>
        						<th>Catechist Last Name</th>
        						<th>Spoken Language</th>
        						<th>Meeting Time</th>
        					</tr>
					</thead>
					
					<tbody>
					
						<?php 
						  foreach ($sacrament_list as $sacrament) {
						?>
						
						<tr>
							<?php 
							 for ($j = 0; $j < 7; $j++) {
							?>
							
							<td><?php echo $sacrament[$j]; ?></td>
							
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
<?php 
    
    require_once '../model/model.php';
    require_once '../authorization/check_session.php';
    
    session_start();
    
    $classroom_list = $_SESSION['classroom_list'];
    
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Classroom List</title>
		
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
		
		<div class="jumbotron jumbotron-fluid text-center bg-light">
			<div class="container-fluid">
				<h1>St. Francis Xavier Catechism Office</h1>
				<h3><?php echo $classroom_list[0][4] . " " . $classroom_list[0][9]; ?></h3>
				<h3><?php echo $classroom_list[0][7] . " " . $classroom_list[0][8]; ?></h3>
				<h3>Room: <?php echo $classroom_list[0][6]; ?></h3>
			</div>
		</div>
	
		<div class="container-fluid">
			<div class="table-responsive table-bordered">
				<table class="table table-hover" id="myTable">
					<thead>

						<tr class="thead-light">
        						<th>Student First Name</th>
        						<th>Student Middle Name</th>
        						<th>Student Last Name</th>
        						<th>Parent's Phone Number</th>
        					</tr>
					</thead>
					
					<tbody>
					
						<?php 
						  foreach ($classroom_list as $classroom) {
						?>
						
						<tr>
							<?php 
							 for ($j = 0; $j < 4; $j++) {
							?>
							
							<td><?php echo $classroom[$j]; ?></td>
							
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
<?php require_once '../authorization/check_session.php';?>

<!DOCTYPE html>
<html>

	<head>
		<title>Add Sacrament Record</title>
		
		<!-- Bootstrap CSS -->
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	
		<!-- JQuery, Popper.js, Bootstrap.js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
	</head>
	
	<body>
	
		<?php require_once '../php/header.php';?>
		
		<div class="container-fluid">
        		<form method="post" action="../controller/add_sacrament_controller.php">
        			<div class="form-group">
        				<label>Select Sacrament to Add</label>
        				<select name="sacrament" size="1">
        					<option value="none"> -- Select One -- </option>
        					<option value="First Communion">First Communion</option>
        					<option value="Confirmation">Confirmation</option>
        				</select>
				</div>
				
				<div class="form-group">
        				<label>Select Meeting Time for Sacrament</label>
        				<select name="meeting_time" size="1">
        					<option value="none"> -- Select One -- </option>
        					<option value="Friday 5:30PM">Friday 5:30PM</option>
        					<option value="Saturday 9:30AM">Saturday 9:30AM</option>
        				</select>
				</div>
        			
        			<button type="submit" class="btn btn-secondary">Submit</button>
                			
        		</form>
		</div>
		
	</body>
	
</html>
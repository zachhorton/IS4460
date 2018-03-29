<?php require_once '../authorization/check_session.php';?>

<!DOCTYPE html>
<html>

	<head>
		<title>Add Catechist Record</title>
		
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
        		<form action="catechist_list.php">
        			<div class="form-group">
        				<label>Catechist First Name</label>
        				<input type="text" class="form-control" placeholder="First Name" name="catechist_first_name">
        			</div>
        			
        			<div class="form-group">
        				<label>Catechist Middle Name</label>
        				<input type="text" class="form-control" placeholder="Middle Name" name="catechist_middle_name">
        			</div>
        			
        			<div class="form-group">
        				<label>Catechist Last Name</label>
        				<input type="text" class="form-control" placeholder="Last Name" name="catechist_last_name">
        			</div>
        			
        			<div class="form-group">
        				<label>Language</label>
        				<input type="text" class="form-control" placeholder="Language" name="language">
        			</div>
        			
        			<div class="form-group">
        				<label>Phone Number</label>
        				<input type="tel" class="form-control" placeholder="Phone Number" name="phone_number">
        			</div>
        			
        			<div class="form-group">
        				<label>E-Mail</label>
        				<input type="email" class="form-control" placeholder="E-Mail" name="email">
        			</div>
        			
        			
        			<button type="submit" class="btn btn-secondary">Submit</button>
                			
        		</form>
		</div>
		
	</body>
	
</html>
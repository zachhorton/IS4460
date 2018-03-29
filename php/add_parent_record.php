<?php require_once '../authorization/check_session.php';?>

<!DOCTYPE html>
<html>

	<head>
		<title>Add Parent Record</title>
		
		<!-- Bootstrap CSS -->
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  		<link rel="stylesheet" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
	
		<!-- JQuery, Popper.js, Bootstrap.js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 		
	
	</head>
	
	<body>
	
		<?php require_once '../php/header.php';?>
		
		<div class="container-fluid">
        		<form method = "post" action="../controller/add_parent_controller.php">
        			<div class="form-group">
        				<label>Parent's First Name</label>
        				<input type="text" class="form-control" placeholder="First Name" name="parent_first_name">
        			</div>
        			
        			<div class="form-group">
        				<label>Parent's Middle Name</label>
        				<input type="text" class="form-control" placeholder="Middle Name" name="parent_middle_name">
        			</div>
        			
        			<div class="form-group">
        				<label>Parent's Last Name</label>
        				<input type="text" class="form-control" placeholder="Last Name" name="parent_last_name">
        			</div>
        			
        			<div class="form-group">
        				<label>Street Address</label>
        				<input type="text" class="form-control" placeholder="Address" name="address">
        			</div>
        			
        			<div class="form-group">
        				<label>City</label>
        				<input type="text" class="form-control" placeholder="City" name="city">
        			</div>
        			
        			<div class="form-group">
        				<label>State</label>
        				<input type="text" class="form-control" placeholder="State" name="state">
        			</div>
        			
        			<div class="form-group">
        				<label>Zip Code</label>
        				<input type="text" class="form-control" placeholder="Zip Code" name="zip_code">
        			</div>
        			
        			<div class="form-group">
        				<label>Phone Number</label>
        				<input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
        			</div>
        			
        			<div class="form-group">
        				<label>E-Mail</label>
        				<input type="text" class="form-control" placeholder="E-Mail" name="email">
        			</div>
        			
        			<div class="form-group">
        				<label>Payment</label>
        				<input type="text" class="form-control" placeholder="Payment" name="payment">
        			</div>
        			  			
        			<button type="submit" class="btn btn-secondary">Submit</button>
        			
                			
        		</form>
		</div>
		
	</body>
	
</html>
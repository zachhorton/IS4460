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
        		<form method="post" action="../controller/add_user_controller.php">
        			<div class="form-group">
        				<label>Username</label>
        				<input type="text" class="form-control" placeholder="Username" name="username">
        			</div>
        			
        			<div class="form-group">
        				<label>First Name</label>
        				<input type="text" class="form-control" placeholder="First Name" name="first_name">
        			</div>
        			
        			<div class="form-group">
        				<label>Last Name</label>
        				<input type="text" class="form-control" placeholder="Last Name" name="last_name">
        			</div>
        			
        			<div class="form-group">
        				<label>Password</label>
        				<input type="password" class="form-control" placeholder="Password" name="password">
        			</div>
        			
        			<div class="form-group">
        				<label>Role</label>
        				<select name="role" size="1">
        					<option value="none"> -- Select One -- </option>
        					<option value="admin">Admin</option>
        					<option value="user">User</option>
        				</select>
        			</div>
        			
        			
        			<button type="submit" class="btn btn-secondary">Submit</button>
                			
        		</form>
		</div>
		
	</body>
	
</html>
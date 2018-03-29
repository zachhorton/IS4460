<?php

    //Get DB Credentials
    require_once '../util/dbinfo.php';
    require_once '../authorization/check_session.php';
    
    //Connect to Database
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->error) {
        die($conn->connect_error);
    }
    
    $query = "SELECT * FROM sacrament";
    
    $result = $conn->query($query);
    if (!$result) {
        die($connect->error);
    }
    
    $query1 = "SELECT * FROM catechist";
    
    $result1 = $conn->query($query1);
    if (!$result1) {
        die($connect->error);
    }

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Add Classroom Record</title>
		
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
        		<form method ="post" action="../controller/add_classroom_controller.php">
        			<div class="form-group">
        				<label>Classroom Number</label>
        				<input type="text" class="form-control" placeholder="Classroom Number" name="classroom_number">
        			</div>
        			
        			<div class="form-group">
        				<label>Classroom Size</label>
        				<select name="classroom_size" size="1">
        					<option value=""></option>
        					<option value="20">20</option>
        					<option value="25">25</option>
        					<option value="30">30</option>
					</select>
        			</div>
        			
        			
        			<div class="form-group">
        				<label>Sacrament ID</label>
        				<select name="sacrament_id" size="1">
        					<?php 
            					while ($row = mysqli_fetch_array($result)) {
            					    echo "<option value='" . $row[0] . "'>" . $row[1] . " " . $row[2] . "</option>";  
                    			}
        					?>
					</select>
        			</div>
        			
        			<div class="form-group">
        				<label>Catechist ID</label>
        				<select name="catechist_id" size="1">
        					<?php 
            					while ($row = mysqli_fetch_array($result1)) {
            					    echo "<option value='" . $row[0] . "'>" . $row[1] . " " . $row[2] . " " . $row[3] . "</option>";  
                    			}
        					?>
					</select>
        			</div>
        			  			
        			<button type="submit" class="btn btn-secondary">Submit</button>
        			
                			
        		</form>
		</div>
		
	</body>
	
</html>
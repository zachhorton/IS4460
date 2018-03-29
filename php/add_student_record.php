<?php 

    //Get DB Credentials
    require_once '../util/dbinfo.php';
    require_once '../authorization/check_session.php';
    
    //Connect to Database
    $conn = new mysqli($hn, $un, $pw, $db, $port);
    if ($conn->error) {
        die($conn->connect_error);
    }
    
    $query = "SELECT parent_id, first_name, last_name FROM parent ORDER BY first_name";
    
    $result = $conn->query($query);
    if (!$result) {
        die($connect->error);
    }
    
    $query1 = "SELECT * FROM sacrament_list";
    
    $result1 = $conn->query($query1);
    if (!$result1) {
        die($connect->error);
    }
    
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Add Student Record</title>
		
		<!-- Bootstrap CSS -->
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  		<link rel="stylesheet" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
	
		<!-- JQuery, Popper.js, Bootstrap.js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>		
	    <script type="text/javascript">
        var j$ = jQuery.noConflict();
            j$( function() {
                j$("#dateOB").datepicker();
                j$( "#dateOB" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
            } );   
        </script>
	</head>
	
	<body>
	
		<?php require_once '../php/header.php';?>
		
		<div class="container-fluid">
        		<form method ="post" action="../controller/add_student_controller.php">
        			<div class="form-group">
        				<label>Student's First Name</label>
        				<input type="text" class="form-control" placeholder="First Name" name="student_first_name" required>
        			</div>
        			
        			<div class="form-group">
        				<label>Student's Middle Name</label>
        				<input type="text" class="form-control" placeholder="Middle Name" name="student_middle_name">
        			</div>
        			
        			<div class="form-group">
        				<label>Student's Last Name</label>
        				<input type="text" class="form-control" placeholder="Last Name" name="student_last_name" required>
        			</div>
        			
        			<div class="form-group">
        				<label>Language</label>
        				<input type="text" class="form-control" placeholder="Language" name="language">
        			</div>
        			
        			<div class="form-group">
        				<label>Date of Birth</label>
        				<input id="dateOB" type="text" class="form-control" placeholder="Date of Birth" name="date_of_birth" required>
        			</div>
        			
        			<div class="form-group">
        				<label>Baptism Certificate</label>
        				<input type="text" class="form-control" placeholder="Baptism Certificate" name="baptism_certificate" required>
        			</div>
        			
        			<div class="form-group">
        				<label>Parent ID</label>
        				<select name="parent_id" size="1" required>
                            <option value="" />
        					<?php 
            					while ($row = mysqli_fetch_array($result)) {
            					    echo "<option value='" . $row[0] . "'>" . $row[1] . " " . $row[2] . "</option>";  
                    			}
        					?>
					</select>
        			</div>
        			
        			<div class="form-group">
        				<label>Sacrament ID</label>
        				<select name="sacrament_id" size="1">
                            <option value="" />
        					<?php 
            					while ($row = mysqli_fetch_array($result1)) {
            					    echo "<option value='" . $row[0] . "'>" . $row[1] . " " . $row[2] . " " . $row[3] . " " . $row[4] . " " . $row[5] . " " . $row[6] . "</option>";  
                    			}
        					?>
					</select>
        			</div>
        			  			
        			<button type="submit" class="btn btn-secondary">Submit</button>
        			
                			
        		</form>
		</div>
		
	</body>
	
</html>
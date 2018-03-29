<?php 

    //Get DB Credentials
    require_once '../util/dbinfo.php';
    require_once '../authorization/check_session.php';
    
    //Connect to Database
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->error) {
        die($conn->connect_error);
    }
    
    $query = "SELECT catechist_id, first_name, last_name FROM catechist";
    
    $result = $conn->query($query);
    if (!$result) {
        die($connect->error);
    }
    
?>
    
<!DOCTYPE html>
<html>

	<head>
		<title>Select Classroom to View</title>
		
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
	
		<?php require_once '../php/header.php'; ?>
		
		<div class="jumbotron jumbotron-fluid text-center bg-light">
			<div class="container-fluid">
				<h1>Select Catechist</h1>
			</div>
		</div>
		
		<form method="post" action="../controller/classroom_list_controller.php">
			<div class="form-group">
				<label>Select Catechist to View</label>
				<select name="catechist_id" size="1">
					<?php 
					while ($row = mysqli_fetch_array($result)) {
					       echo "<option value='" . $row[0] . "'>" . $row[1] . " " . $row[2] . "</option>";  
        					}
					?>
				</select>
				<input type="submit" class="btn btn-secondary">
			</div>
		</form>
		
	</body>
</html>

<?php

    require_once '../model/model.php';
    
    if (isset($_POST['catechist_id'])) {
        
        $catechist_id = $_POST['catechist_id'];
        
        $obj = new ClassroomListModel();
        $obj->selectAll($catechist_id);
        $classroom_list = $obj->classroomList;
        
        session_start();
        $_SESSION['classroom_list'] = $classroom_list;
        
        header("Location: ../view/classroom_list_view.php");
        
        exit();
        
    }
    
    

?>
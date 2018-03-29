<!DOCTYPE html>
<html>

	<head>
		<title>Header</title>
		
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
	
		<nav class="navbar navbar-expand navbar-light bg-light">
			
			<div class="navbar-header">
				<a class="navbar-brand" href="../php/home_page.php"> <img alt="St. Francis Xwvier" src="../img/SFX.jpg" style="width: 70px"></a>
			</div>
				
			<ul class="navbar-nav">
				<li class="nav-item">
               		<a class="nav-link" href="../controller/student_list_controller.php">Student List</a> 
               	</li>
               	
               	<li class="nav-item"> 
               		<a class="nav-link" href="../controller/parent_list_controller.php">Parent List</a>
               	</li>
               	
               	<li class="nav-item">
               		<a class="nav-link" href="../controller/catechist_list_controller.php">Catechist List</a> 
               	</li>
               	
               	<li class="nav-item"> 
               		<a class="nav-link" href="../controller/classroom_list_controller.php">Classroom List</a>
               	</li>
               	
               	<li class="nav-item"> 
               		<a class="nav-link" href="../controller/sacrament_list_controller.php">Sacrament List</a>
               	</li>
               	
               	<li class="nav-item"> 
               		<a class="nav-link" href="../authorization/continue.php">Add Record</a>
               	</li>
               	
               	<li class="nav-item"> 
               		<a class="nav-link" href="../authorization/logout.php">Log Out</a>
               	</li>
               	
			</ul>
		
		
		</nav>
		
	</body>
	
</html>

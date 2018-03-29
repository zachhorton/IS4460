<!DOCTYPE html>
<html>

	<head>
		<title>Add Record</title>
		
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
	
		<?php 
		  require_once 'header.php';
		  $text = "catechist_list.php"
		?>
		
		<form>
			<div class="form-group">
				<label>Select Record to Add</label>
				<select onChange="routePage(this.value);">
					<option value="none"> -- Select One -- </option>
					<option value="parentStudent"> Add Parent/Student Record</option>
					<option value="catechist">Add Catechist Record</option>
					<option value="classroom">Add Classroom Record</option>
				</select>
			</div>
		</form>
		
	</body>
	<script>
		function routePage(addType) {
// 			alert('addType: '+addType);
			if (addType === 'parentStudent') {
				document.location.href = 'add_parent_student_record.php';
			} else if (addType === 'catechist') {
				document.location.href = 'add_catechist_record.php';
			} else if (addType === 'classroom') {
 				//document.location.href = 'add_classroom_record.php';
				alert('Adding classrooms is not currently supported.');
			}
		}
	</script>
</html>
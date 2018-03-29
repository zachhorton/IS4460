<?php require_once '../authorization/check_session.php';?>

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
		  require_once '../php/header.php';
		?>
		
		<form>
			<div class="form-group">
				<label>Select Record to Add</label>
				<select onChange="routePage(this.value);">
					<option value="none"> -- Select One -- </option>
					<option value="catechist">Add Catechist Record</option>
					<option value="sacrament">Add Sacrament Record</option>
					<option value="classroom">Add Classroom Record</option>
					<option value="user">Add User Record</option>
				</select>
			</div>
		</form>
		
	</body>
	<script>
		function routePage(addType) {
			if (addType === 'catechist') {
				document.location.href = '../php/add_catechist_record.php';
			}
			else if (addType === 'sacrament') {
				document.location.href = '../php/add_sacrament_record.php';
			}
			else if (addType === 'classroom') {
 				document.location.href = '../php/add_classroom_record.php';
			}
			else if (addType === 'classroom') {
 				document.location.href = '../php/add_classroom_record.php';
			}
			else if (addType === 'user') {
				document.location.href = '../php/add_user_record.php';
			}
		}
	</script>
</html>
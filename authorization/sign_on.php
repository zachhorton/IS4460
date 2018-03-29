<!DOCTYPE html>
<html>

	<head>
		<title>
		
		</title>
		<!-- Bootstrap CSS -->
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	
		<!-- JQuery, Popper.js, Bootstrap.js -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
	</head>
	
	<body class="bg-light">
		
		<div class="text-center">
        		<img alt="St. Francis Xavier Catholic Church" src="../img/SFX.jpg">
        		<h1 class="display-4">St. Francis Xavier: Religios Education Office</h1>
        		<p class="lead">Sign On </p>
		</div>
		
		<form action="sign_on.php" method="post" class="col-2 offset-5">
		
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="username" placeholder="Username">
			</div>
			
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" placeholder="Password">
			</div>
			
			<button type="submit" class="btn btn-secondary">Sign In</button>
		
		</form>
		
	</body>
	
</html>

<?php

    require_once '../util/dbinfo.php';
    require_once '../model/model.php';
    
    //Connect to Database
    $conn = new mysqli($hn, $un, $pw, $db);
    if ($conn->error) {
        die($conn->connect_error);
    }
    
    if (isset($_POST['username']) && isset($_POST['password'])) {
        
        //Get values from SERVER
        $un_temp = mysql_entities_fix_string($conn, $_POST['username']);
        $pw_temp = mysql_entities_fix_string($conn, $_POST['password']);
        
        //Get password from Database
        $query = "SELECT password FROM users WHERE username = '$un_temp'";
        
        $result = $conn->query($query);
        if (!$result) {
            die($connect->error);
        }
                
        $result->data_seek(0);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        
        $password = $row['password'];
        
        $salt1 = "D10sE$";
        $salt2 = "@mOr";
        $token = hash("ripemd128", "$salt1$pw_temp$salt2");
        
        if ($token == $password) {
            
            session_start();
            
            $user_role = new UserRole($un_temp);
            $_SESSION['username'] = $un_temp;
            $_SESSION['password'] = $pw_temp;
                     
            header("Location: ../php/home_page.php");
            
        }
        else {
            echo "You have failed to login!";
        }
    }
    else {
        exit();
    }
    
    //Sanitize Functions
    function mysql_entities_fix_string($conn, $string) {
        return htmlentities(mysql_fix_string($conn, $string));
    }
    
    function mysql_fix_string($conn, $string) {
        if (get_magic_quotes_gpc()) {
            $string = stripslashes($string);
        }
        
        return $conn->real_escape_string($string);
    }

?>
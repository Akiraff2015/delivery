<?php
	session_start();
	
	if (!isset($_SESSION['success'])) {
		header("Location: /index.php");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Successfully Registered</title>
		
    	<meta charset="utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    	<meta name="viewport" content="width=device-width, initial-scale=1" />
	 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="public/js/script.js"></script>
	</head>
	
	<body>
		<h3> Successfully registered a new account! </h3>
		<p><a href="/index.php">Click Here</a> to login now to page.</p>
	</body>
</html>

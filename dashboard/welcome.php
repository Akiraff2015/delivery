<?php
	/*
	Created by: Akira F. Fukushima
	Github: akiraff2015
	Date: 5 Sept 2017
	File: ./dashboard/welcome.php
	*/
	session_start();

	if (!isset($_SESSION['login'])) {
		header("Location: /index.php");
		exit;
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    	<meta name="viewport" content="width=device-width, initial-scale=1" />

    	<title>Delivery</title>
	 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="public/js/script.js"></script>
	</head>
	
	<body>
		<p>Logout: <a href="/logout.php">click here</a></p>
	</body>
</html>

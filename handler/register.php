<?php
	/*
	Created by: Akira F. Fukushima
	Github: akiraff2015
	Date: 6 Sept 2017
	File: ./handler/register.php
	*/
	session_start();

	$filepath = realpath(dirname(__FILE__));
	include_once($filepath . '/../models/User.php');

	// Instiating database
	$db = Database::get_instance();
	$user = new User($db, $db->get_connection());

	// User has clicked on submit register button
	if (isset($_POST['form_register'])) {
		//TODO SQL INJECTION PREVENTION
		$username = $_POST["_regusername"];
		$password = $_POST["_regpassword"];

		// User has successfully registered to the application.
		if($user->register($username, $password)) {
			$_SESSION['success'] = true;
			header("Location: /success.php");
			exit;
		}
		
		//account already exists
		else {
			exit;
		}
	}
?>
